<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langList = ['C', 'Java', 'PHP', 'Ruby', 'C#', 'JavaScript', 'C++', 'Go', 'Python', 'Kotlin', 'Swift', 'Perl', 'Scala', 'R', 'VBA', 'COBOL', 'Rust', 'TypeScript', 'CoffeeScript', 'Objective-C', 'Dart', 'Elixir', 'DM', 'Groovy'];
        foreach($langList as $lang){
            $language = new Language();
            $language->language_name = $lang;
            $language->save();
        }
    }
}
