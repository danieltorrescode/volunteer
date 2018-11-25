<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
	protected $table = "volunteers";
  protected $guarded = [];

	public function activity_data()
	{
	return $this->belongsTo('App\Activity','activity');
	}
}
