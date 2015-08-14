<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
    protected $fillable = [
        'title',
        'slug',
        'image_url',
        'info',
        'cat_id',
        'created_at',
        'updated_at'
    ];

}
