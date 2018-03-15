<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

    public $booleanTexts = [
    	'0'=>'否',
    	'1'=>'是'
    ];
    protected $guarded = ['id'];

    public function category(){
    	return $this->belongsTo('App\ProductCategory', 'category_id');
    }

    public function getCommandTextAttribute($value){
    	return $this->$booleanTexts[$this->is_command];
    }

    public function getShowTextAttribute($value){
    	return $this->booleanTexts[$this->is_show];
    }
}
