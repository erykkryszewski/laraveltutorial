<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
  protected $table = 'job_listings'; // specify the table name if it differs from the model name

  protected $fillable = ['title', 'salary']; // specify which attributes can be mass assigned
}
