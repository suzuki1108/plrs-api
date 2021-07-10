<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\AffiliateSeeder;
use Database\Seeders\QiitaPostsSeeder;
use Database\Seeders\GithubRepositorySeeder;
use Encore\Admin\Auth\Database\AdminTablesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageSeeder::class);
        $this->call(AffiliateSeeder::class);
        $this->call(GithubRepositorySeeder::class);
        $this->call(QiitaPostsSeeder::class);
        $this->call(AdminTablesSeeder::class);
    }
}
