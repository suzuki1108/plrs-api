<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        return 0;
    }
}
