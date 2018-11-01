<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = [
    	'created_at',
    	'updated_at'
    ];
    protected $fillable = [
    		'title',
    		'description',
    		'description_en',
    		'image',
    		'url',
    		'active'
    ];
}
