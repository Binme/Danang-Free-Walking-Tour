<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recom extends Model
{
    public function Recom_details(){
    	return $this->hasOne('App\Recom_detail','recom_id','id');
    }
}
