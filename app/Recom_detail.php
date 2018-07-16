<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recom_detail extends Model
{
    public function Recom(){
    	return $this->belongsTo('App\Recom','recom_id','id');
    }
    public function Image(){
    	return $this->hasMany('App\Image','recom_detail_id','id');
    }
}
