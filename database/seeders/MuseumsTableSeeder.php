<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Museum;

class MuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10; $i++) {
          $new_museum = new Museum();

          $new_museum->name = 'Nome Museo ' . $i;
          $new_museum->coordinate_x = 40 + $i + mt_rand(0, 1000) / 1000;
          $new_museum->coordinate_y = 1 + $i + mt_rand(0, 1000) / 1000;
          $new_museum->city = 'Citta Museo ' . $i;

          $new_museum->save();
        }
    }
}
