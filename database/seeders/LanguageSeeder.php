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
        $langList = [
            [
                'name' => 'C',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/a8f030ff94adbce98c79fc777059cfaf2825ba6c/medium.jpg?1587926249',
                'catch_phrase' => 'ここにC言語のキャッチフレーズが入ります。',
                'description' => 'ここにC言語の詳細説明が入ります。'
            ],
            [
                'name' => 'Java',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/1bfaf60121121d7dec866c83d4c4453347ec93e2/medium.jpg?1436171387',
                'catch_phrase' => 'ここにJavaのキャッチフレーズが入ります。',
                'description' => 'ここにJavaの詳細説明が入ります。'
            ],
            [
                'name' => 'PHP',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/b871970ded17b8af635a100cd45b4d701419a122/medium.jpg?1574663257',
                'catch_phrase' => 'ここにPHPのキャッチフレーズが入ります。',
                'description' => 'ここにPHPの詳細説明が入ります。'
            ],
            [
                'name' => 'Ruby',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/6fcffce985e8639f6c57f88d6d957ba70391e63b/medium.jpg?1623823083',
                'catch_phrase' => 'ここにRubyのキャッチフレーズが入ります。',
                'description' => 'ここにRubyの詳細説明が入ります。'
            ],
            [
                'name' => 'C#',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/5d80f1647ab8e9f5dde2fd4164c24cd26bfcc672/medium.jpg?1558927763',
                'catch_phrase' => 'ここにC#のキャッチフレーズが入ります。',
                'description' => 'ここにC#の詳細説明が入ります。'
            ],
            [
                'name' => 'JavaScript',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/5ba8b1b47ea38ab6074534e1772fca756f82e36c/medium.jpg?1611636471',
                'catch_phrase' => 'ここにJavaScriptのキャッチフレーズが入ります。',
                'description' => 'ここにJavaScriptの詳細説明が入ります。'
            ],
            [
                'name' => 'C++',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/fe7df47710bdae8b8565b323841a6b89e2f66b89/medium.jpg?1515774066',
                'catch_phrase' => 'ここにC++のキャッチフレーズが入ります。',
                'description' => 'ここにC++の詳細説明が入ります。'
            ],
            [
                'name' => 'Go',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/e246e73185e846eec23e2492951e34663c83b46b/medium.jpg?1584432037',
                'catch_phrase' => 'ここにGoのキャッチフレーズが入ります。',
                'description' => 'ここにGoの詳細説明が入ります。'
            ],
            [
                'name' => 'Python',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/f3e9f27395c7fc051de17f34aefcda219c796fcd/medium.jpg?1623836124',
                'catch_phrase' => 'ここにPythonのキャッチフレーズが入ります。',
                'description' => 'ここにPythonの詳細説明が入ります。'
            ],
            [
                'name' => 'Kotlin',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/adfd3568a429637ca558c7943fec8c96f9394294/medium.jpg?1457084234',
                'catch_phrase' => 'ここにKotlinのキャッチフレーズが入ります。',
                'description' => 'ここにKotlinの詳細説明が入ります。'
            ],
            [
                'name' => 'Swift',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/8924010780db484a83145542a3e49c6c2084ecb7/medium.jpg?1401738498',
                'catch_phrase' => 'ここにSwiftのキャッチフレーズが入ります。',
                'description' => 'ここにSwiftの詳細説明が入ります。'
            ],
            [
                'name' => 'Perl',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/62b7b4bb21c57f377926995086a4723c566042e8/medium.jpg?1383884139',
                'catch_phrase' => 'ここにPerlのキャッチフレーズが入ります。',
                'description' => 'ここにPerlの詳細説明が入ります。'
            ],
            [
                'name' => 'Scala',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/dc88b232098c780491d677e4a208fb4a657470af/medium.jpg?1568269339',
                'catch_phrase' => 'ここにScalaのキャッチフレーズが入ります。',
                'description' => 'ここにScalaの詳細説明が入ります。'
            ],
            [
                'name' => 'R',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/3a721a3f0c87ad07749c5f659b0365ea548f8def/medium.jpg?1516532296',
                'catch_phrase' => 'ここにRのキャッチフレーズが入ります。',
                'description' => 'ここにRの詳細説明が入ります。'
            ],
            [
                'name' => 'VBA',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/c12d9d0fc654311c657b45784a598331e39ebaf6/medium.jpg?1598801339',
                'catch_phrase' => 'ここにVBAのキャッチフレーズが入ります。',
                'description' => 'ここにVBAの詳細説明が入ります。'
            ],
            [
                'name' => 'COBOL',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/bba0c0e84a464f376ab46f4780f2d92d65d8dbf8/medium.jpg?1468151862',
                'catch_phrase' => 'ここにCOBOLのキャッチフレーズが入ります。',
                'description' => 'ここにCOBOLの詳細説明が入ります。'
            ],
            [
                'name' => 'Rust',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/a28c9ce47ee8c1427846c66cc34b48e44f087c5a/medium.jpg?1514023966',
                'catch_phrase' => 'ここにRustのキャッチフレーズが入ります。',
                'description' => 'ここにRustの詳細説明が入ります。'
            ],
            [
                'name' => 'TypeScript',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/5dd0a3684d0ad54cef6b7cd6c52918be777435a3/medium.jpg?1513494620',
                'catch_phrase' => 'ここにTypeScriptのキャッチフレーズが入ります。',
                'description' => 'ここにTypeScriptの詳細説明が入ります。'
            ],
            [
                'name' => 'CoffeeScript',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/af72c984fe0919a11966386c678d77f52886acaf/medium.jpg?1517585375',
                'catch_phrase' => 'ここにCoffeeScriptのキャッチフレーズが入ります。',
                'description' => 'ここにCoffeeScriptの詳細説明が入ります。'
            ],
            [
                'name' => 'Objective-C',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/9a7e96bf051980ee623096f070b71bb3b21f8704/medium.jpg?1389670184',
                'catch_phrase' => 'ここにObjective-Cのキャッチフレーズが入ります。',
                'description' => 'ここにObjective-Cの詳細説明が入ります。'
            ],
            [
                'name' => 'Dart',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/cb9d4f6ba949d1faf68fc5ece14a6fda97b2e696/medium.jpg?1514528322',
                'catch_phrase' => 'ここにDartのキャッチフレーズが入ります。',
                'description' => 'ここにDartの詳細説明が入ります。'
            ],
            [
                'name' => 'Elixir',
                'img' => 'https://s3-ap-northeast-1.amazonaws.com/qiita-tag-image/6e0b49c8d70cd06c57386d923a8362fbaf71c233/medium.jpg?1364840830',
                'catch_phrase' => 'ここにElixirのキャッチフレーズが入ります。',
                'description' => 'ここにElixirの詳細説明が入ります。'
            ]
        ];
        foreach($langList as $lang){
            $language = new Language();
            $language->language_name = $lang['name'];
            $language->img_url = $lang['img'];
            $language->catch_phrase = $lang['catch_phrase'];
            $language->description = $lang['description'];
            $language->save();
        }
    }
}
