<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewApp extends Model
{
  //Table Name
  protected $table = 'interview_data_applications';
  //Primary Key
  public $primaryKey = 'indice';
  //Timestamps
  public $timestamps = false;

}
