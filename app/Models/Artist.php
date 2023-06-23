<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function artworks(){
      return $this->hasMany(Artwork::class);
    }


    protected $fillable = [
      'name',
      'surname',
      'type'
  ];
}
