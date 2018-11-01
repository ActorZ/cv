<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $dates = [
	 'created_at',
	 'deleted_at',
	 'updated_at'
	 ];

	 protected $fillable = [
	 	'name',
	 	'email',
	 	'subject',
	 	'message'
	 ];

}
