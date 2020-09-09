<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 24; $i++) {
          for ($j=0; $j < 9; $j++) {
            $new_song = new Song();
            $new_song->song = $faker->text(20);
            $new_song->duration = $faker->time();
            $new_song->album_id = $i + 1;
            $new_song->save();
          }
        }
    }
}
