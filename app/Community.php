<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
  protected $table = "communities";
  protected $guarded = [];



	public function activities()
	{
	return $this->belongsToMany('App\Activity', 'activities_communities', 'communities_id', 'activities_id')
							->withPivot('status_id')->withTimestamps();
	}
}
