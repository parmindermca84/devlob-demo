<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    
	protected $fillable = [
		'user_id', 'content', 'live', 'post_on'
	];

    public function setLiveAttribute($value)
    {
    	$this->attributes['live'] = (boolean) $value;
    }

    public function getshortContentAttribute()
    {
    	return substr($this->content, 0, random_int(60, 150)) . '...';
    }
}
