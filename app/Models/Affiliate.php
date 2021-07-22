<?php

namespace App\Models;

use App\Models\Language;
use App\Models\LanguageDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Affiliate extends Model
{
    use HasFactory;

    public function language(){
       return $this->belongsTo(Language::class); 
    }

    public static function getRandomAffiliateURL(){
        $affiliate = self::where('category_id', config('const.categories.schools'))->get();
        return ['affiliateTag' => $affiliate->shuffle()->first()->url];
    }
}
