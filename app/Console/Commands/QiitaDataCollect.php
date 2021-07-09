<?php

namespace App\Console\Commands;

use App\Models\Language;
use App\Models\QiitaPosts;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;


class QiitaDataCollect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qiita:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'QiitaAPIから、言語毎の投稿数を取得するバッチです。';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $languageList = Language::all();
        foreach($languageList as $language){
            // QiitaAPIに合わせて記号を含む言語名を修正
            $languageName = $language->language_name === 'C#' ? 'csharp' : $language->language_name;
            $languageName = $language->language_name === 'C++' ? 'cpp' : $language->language_name;

            // QiitaAPIをコール（エラー時は、2回まで５秒置きにリトライを実施）
            $data = Http::retry(2, 5000)
                    ->get('https://qiita.com/api/v2/tags/'.$languageName)
                    ->json();
            
            // テーブルqiita_postsにデータを保存
            $qiitaPost = new QiitaPosts();
            $qiitaPost->language_id = $language->id;
            $qiitaPost->number_of_posts = $data['items_count'];
            $qiitaPost->save();
        }
        return 0;
    }
}
