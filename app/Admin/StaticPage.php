<?php

namespace App\Admin;

use QCod\ImageUp\HasImageUploads;
use Illuminate\Database\Eloquent\Model;


class StaticPage extends Model
{
	use HasImageUploads;

	 protected static $imageFields = [
        'cover', 'avatar'
    ];

	protected $dates = [
    	'created_at',
    	'updated_at'
    ];
    protected $fillable = [
    		'title',
    		'title_en',
    		'short_description',
    		'short_description_en',
    		'description',
    		'description_en',
    		'image',
    		'active'
    ];
}
