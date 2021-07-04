<?php

namespace Database\Seeders;

use App\Models\Affiliate;
use App\Models\Language;
use Illuminate\Database\Seeder;

class AffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Language::all();

        // 各言語ごとに、全てのカテゴリーのダミーレコードを作成
        foreach($languages as $lang){
            $categories = array_values(config('const.categories'));
            foreach($categories as $category){
                $affiliate = new Affiliate();
                $affiliate->language_id = $lang->id;
                $affiliate->category_id = $category;
                $affiliate->url = 'https://fact-cs.com';
                $affiliate->save();
            }

        }
    }
}
