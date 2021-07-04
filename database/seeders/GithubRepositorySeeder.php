<?php

namespace Database\Seeders;

use App\Models\GithubRepository;
use App\Models\Language;
use Illuminate\Database\Seeder;

class GithubRepositorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Language::all();
        // 全ての言語の100日分のダミーデータを作成
        for($i = 0; $i < 100; $i++){
            foreach($languages as $lang){
                // 該当言語の前日のリポジトリ情報を取得
                $date = now()->subDays($i - 1)->format('Y-m-d');
                $yesterdayData = GithubRepository::where([
                    ['language_id', $lang->id],
                    ['created_at', $date]
                ])->first();

                $githubRepository = new GithubRepository();
                if(empty($yesterdayData)){
                    // 前日データが存在しない場合は、100000万〜200000万repositoryで設定する。
                    $githubRepository->number_of_repositories = rand(100000, 200000); 
                }else{
                    // 前日データ〜＋1000の範囲で取得したrandom値で設定する。
                    $githubRepository->number_of_repositories = 
                        rand($yesterdayData->number_of_repositories, 
                             $yesterdayData->number_of_repositories + 1000); 
                }
                $githubRepository->language_id = $lang->id;
                $githubRepository->created_at = now()->subDays($i);
                $githubRepository->save();
            }
        }
    }
}
