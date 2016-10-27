<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Brand extends Model
{
	use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'brands';
	protected $primaryKey = 'id';
	// public $timestamps = false;
	 protected $guarded = ['id'];
	// protected $fillable = [];
	// protected $hidden = [];
    // protected $dates = [];

	protected $casts = [
			'cover_img' => 'array'
	];

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	public function locations(){
		return $this->hasMany('App\Models\Location');
	}
	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
	public function setCoverImgAttribute($value)
	{
		$attribute_name = "cover_img";
		$disk = "uploads";
		$destination_path = "cover_imgs";
		$this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
