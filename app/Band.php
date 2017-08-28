<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{

	/**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
  	'website',
  	'start_date',
  	'still_active'
  ];

  /**
   * Get the Albums for the Band
   */
  public function albums()
  {
  	return $this->hasMany('App\Album');
  }

  /**
   * Boot method (cascade delete)
   */
  public static function boot()
  {
  	parent::boot();

  	static::deleted(function ($band) {
  		foreach($band->albums as $album) {
  			$album->delete();
  		}
  	});
  }
}
