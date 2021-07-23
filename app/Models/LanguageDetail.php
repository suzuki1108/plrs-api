<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LanguageDetail extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }
    
    public static function findByLanguageId(int $languageId){
        $detail = self::where('language_id', $languageId)->first();
        $language = Language::where('id', $languageId)->first();
        return [
            'language_name' => $language->language_name,
            'img_url' => $language->img_url,
            'feature' => $detail->feature,
            'ability_todo' => $detail->ability_todo,
            'annual_income' => $detail->annual_income,
            'review' => $detail->review,
            'certificate' => $detail->certificate,
            'how_to_study' => $detail->how_to_study,
            'created_at' => $detail->created_at,
            'updated_at' => $detail->updated_at,
        ];
    }
}