<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Recom_detail(){
    	return $this->belongsTo('App\Recom_detail','recom_detail_id','id');
    }
}
