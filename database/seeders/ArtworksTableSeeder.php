<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artwork;
use Faker\Generator as Faker;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0; $i<20; $i++){

        $new_artwork = new Artwork();

        $new_artwork->name = 'Nome Opera ' . $i;
        $new_artwork->date = '1990-10-10';


        $new_artwork->save();
    }
  }
}
