<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//
    protected $fillable = [
        'title',
        'body',
        'post_status', 
        'excerpt',
        'published_at',
        'slug',
        'image_url',
        'cat_id',
    ];
    
}
