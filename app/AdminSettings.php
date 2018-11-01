<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    protected $dates = [
    	'created_at',
    	'updated_at'
    ];
    protected $fillable = [
    		'name',
    		'email',
    		'birth',
    		'phone',
            'document_sr',
            'document_en'
    ];
}
