<?php

namespace App\Console\Commands;

use App\Models\GithubRepository;
use App\Models\Language;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GithubDataCollect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:repositories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '言語毎の日毎のリポジトリ総数をスクレイピングして取得するバッチ';

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
            // GitHub APIに合わせて記号を含む言語名を修正
            $languageName = $language->language_name === 'C#' ? 'C%23' : $language->language_name;
            $languageName = $language->language_name === 'C++' ? 'C%2B%2B' : $language->language_name;

            // GitHub APIをコール（エラー時は、2回まで５秒置きにリトライを実施）
            $data = Http::retry(2, 5000)
            ->get('https://api.github.com/search/repositories?q=language%3A'.$languageName)
            ->json();
            
            // テーブルgithub_repositoriesにデータを保存
            $githubRepository = new GithubRepository();
            $githubRepository->language_id = $language->id;
            $githubRepository->number_of_repositories = $data['total_count'];
            $githubRepository->save();
            
            // API仕様上、1リクエストにつき10秒待機する。
            sleep(10);
        }
        return 0;
    }
}
