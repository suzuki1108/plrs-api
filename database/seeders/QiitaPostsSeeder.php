<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\QiitaPosts;
use Illuminate\Database\Seeder;

class QiitaPostsSeeder extends Seeder
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
                // 該当言語の前日の投稿情報を取得
                $date = now()->subDays($i - 1)->format('Y-m-d');
                $yesterdayData = QiitaPosts::where([
                    ['language_id', $lang->id],
                    ['created_at', $date]
                ])->first();

                $qiitaPosts = new QiitaPosts();
                if(empty($yesterdayData)){
                    // 前日データが存在しない場合は、1000〜2000postsで設定する。
                    $qiitaPosts->number_of_posts = rand(1000, 2000); 
                }else{
                    // 前日データ〜＋1000の範囲で取得したrandom値で設定する。
                    $qiitaPosts->number_of_posts = 
                        rand($yesterdayData->number_of_posts, 
                             $yesterdayData->number_of_posts + 50); 
                }
                $qiitaPosts->language_id = $lang->id;
                $qiitaPosts->created_at = now()->subDays($i);
                $qiitaPosts->save();
            }
        }
    }
}
