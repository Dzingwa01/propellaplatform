<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incubatee extends BaseModel
{
    //
    protected $fillable =['user_id','short_bio','stage', 'elevator_pitch','facebook','linked_id','twitter','startup_name','hub','smart_city_tags','b_type','cohort','company_website','logo_url','profile_picture_url','product_platform'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
