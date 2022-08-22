<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geo extends Model
{
  //Table Name
  protected $table = 'geo_data';
  //Primary Key
  public $primaryKey = 'postcode';
  //Timestamps
  public $timestamps = false;


}
