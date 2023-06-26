<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'date',
      'artist_id',
      'museum_id'
    ];

    public function artist(){
      return $this->belongsTo(Artist::class);
    }

     public function museum(){
      return $this->belongsTo(Museum::class);
    }

}
