<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'city',
    'coordinate_x',
    'coordinate_y'
  ];
}
