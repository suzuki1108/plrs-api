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
            'job_offer' => $detail->job_offer,
            'certificate' => $detail->certificate,
            'how_to_study' => $detail->how_to_study,
            'affiliate' => Affiliate::where('language_id', $languageId)->get()->map(function($affiliate){
                return[
                    'category_id' => $affiliate->category_id,
                    'url' => $affiliate->url
                ];
            })
        ];
    }
}