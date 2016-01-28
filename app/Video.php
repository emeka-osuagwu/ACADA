<?php

namespace ACADA;

use ACADA\User;
use ACADA\Favourite;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

	protected $fillable = ['src', 'title', 'categories', 'user_id', 'description'];

	// public function user()
	// {
	// 	return $this->belongsTo('ACADA\User');
	// }

	public function likes()
    {
        return $this->hasMany('ACADA\Like');
    }

    public function favourites()
    {
        return $this->hasMany('ACADA\Favourite');
    }
}
