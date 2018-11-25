<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  //

  protected $table = "activities";
  protected $guarded = [];


  public function communities()
  {
  return $this->belongsToMany('App\Community', 'activities_communities', 'activities_id', 'communities_id')
							->withPivot('status_id')->withTimestamps();;
	}

	public function volunteers()
	{
	return $this->hasMany('App\Volunteer', 'activity');
	}

}
