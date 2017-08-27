<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	/**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
  	'band_id',
	  'name',
	  'recorded_date',
	  'release_date',
	  'number_of_tracks',
	  'label',
	  'producer',
	  'genre'
  ];

  /**
   * Get Band that owns this album
   */
  public function band()
  {
      return $this->belongsTo('App\Band');
  }
}
