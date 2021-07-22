<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Affiliate extends Model
{
    use HasFactory;

    public function language(){
       return $this->belongsTo(Language::class); 
    }

    public static function getRandomAffiliateURL(){
        $affiliate = self::where('category_id', config('const.categories.schools'))->get()->shuffle();
        return [
            'affiliateTag1' => $affiliate->first()->url,
            'affiliateTag2' => $affiliate->last()->url,
        ];
    }
}
