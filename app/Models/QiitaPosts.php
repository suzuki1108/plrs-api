<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QiitaPosts extends Model
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

        $query = <<<EOF
            SELECT
                language_name, 
                basedate.number_of_posts - beforedate.number_of_posts AS incremental
            FROM (
                SELECT *
                FROM qiita_posts qp 
                WHERE created_at BETWEEN '{$baseDate}' AND '{$afterDate}'
            ) basedate
            LEFT JOIN (
                SELECT *
                FROM qiita_posts qp2
                WHERE created_at BETWEEN '{$beforeDate}' AND '{$baseDate}'
            ) beforedate
            ON basedate.language_id = beforedate.language_id
            INNER JOIN languages la
            ON basedate.language_id = la.id
            ORDER BY incremental DESC;
        EOF;

        return DB::select($query);
    }

    // 引数の週（何週前か）に基づいてデータ増分と、増分降順にソートしたデータを返却する。
    public static function weeklyRank($week){
        //
    }
}
