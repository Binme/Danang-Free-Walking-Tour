<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recom_detail extends Model
{
    public function Recom(){
    	return $this->hasOne('App\Recom');
    }
}
