<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
        $new_artist = new Artist();
        $new_artist->name = 'Nome Artista ' . $i;
        $new_artist->surname = 'Cognome Artista ' . $i;
        $new_artist->type = 'Tipo Musica ' . $i;
        $new_artist->save();

        }

    }
}
