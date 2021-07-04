<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QiitaPosts extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public static function dailyRank(){

        $todayPosts = self::where([
            ['created_at', '>', now()->format('Y-m-d')]
        ])
        ->orderBy('number_of_posts', 'desc')
        ->get();

        $rank = $todayPosts->map(function($post, $index){
            return [
                'rank' => $index +1,
                'language' => $post->language->language_name,
                'number_of_posts' => $post->number_of_posts
            ];
        });

        return $rank;
    }
}
