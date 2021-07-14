<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GithubRepository extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }

    // 引数の日にち（現在日より何日前か）に基づいて該当日のデータ増分と、増分降順にソートしたデータを返却する。
    public static function dailyRank($days){

        $baseDate = now()->subDays($days)->format('Y-m-d');
        $beforeDate = now()->subDays($days + 1)->format('Y-m-d');
        $afterDate = now()->subDays($days - 1)->format('Y-m-d');

        return DB::select(self::getQuery($baseDate, $afterDate, $beforeDate, $baseDate));
    }

    // 引数の週（何週前か）に基づいてデータ増分と、増分降順にソートしたデータを返却する。
    public static function weeklyRank($week){

        $baseSaturday = date("Y-m-d", strtotime('-'.$week.' sat '.now()));
        $afterBaseDay = date("Y-m-d", strtotime($baseSaturday.' +1 day'));

        $lastSunday = date("Y-m-d", strtotime($baseSaturday.' -6 day'));
        $afterLastSunday = date("Y-m-d", strtotime($lastSunday.' +1 day'));

        return DB::select(self::getQuery($baseSaturday, $afterBaseDay, $lastSunday, $afterLastSunday));
    }

    // 引数の週（何週前か）に基づいてデータ増分と、増分降順にソートしたデータを返却する。
    public static function monthlyRank($month){

        // 今月初日
        $lastMonthFirstDay = date('Y-m-d', strtotime('first day of this month'));

        $baseMonthFirstDay = date('Y-m-d', strtotime($lastMonthFirstDay.' -'.$month.' month'));
        $afterBaseMonthFirstDay = date("Y-m-d", strtotime($baseMonthFirstDay.' +1 day'));

        $baseMonthLastDay = date('Y-m-d', strtotime('last day of '.$baseMonthFirstDay));
        $afterBaseMonthLastDay = date("Y-m-d", strtotime($baseMonthLastDay.' +1 day'));

        return DB::select(self::getQuery($baseMonthLastDay, $afterBaseMonthLastDay, $baseMonthFirstDay, $afterBaseMonthFirstDay));
    }

    // 引数の対象日からDBに渡すクエリを生成
    private static function getQuery(string $baseDate, string $afterBaseDate, string $lastBaseDate, string $afterLastBaseDate): string{
        return <<<EOF
            SELECT
                la.id,
                language_name,
                img_url,
                catch_phrase,
                description,
                basedate.number_of_repositories - beforedate.number_of_repositories AS incremental
            FROM (
                SELECT *
                FROM github_repositories gr 
                WHERE created_at BETWEEN '{$baseDate}' AND '{$afterBaseDate}'
            ) basedate
            LEFT JOIN (
                SELECT *
                FROM github_repositories gr2
                WHERE created_at BETWEEN '{$lastBaseDate}' AND '{$afterLastBaseDate}'
            ) beforedate
            ON basedate.language_id = beforedate.language_id
            INNER JOIN languages la
            ON basedate.language_id = la.id
            ORDER BY incremental DESC;
        EOF;
    }
}
