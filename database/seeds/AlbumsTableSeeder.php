<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 6; $i++) {
          for ($j=0; $j < 4; $j++) {
            $new_album = new Album();
            $new_album->title = $faker->randomElement([
              'Bleach', 'Nevermind', 'In Utero', 'Sap',
              'Dirt', 'Unplugged', 'Black Gives Way To Blue',
              'Wasting Light', 'Concrete and Gold', 'Harvest',
              'Holy Diver', 'Ten', 'Gigaton', 'Backspacer', 'Riot Act',
              'Binatural', 'Yield', 'No Code', 'Vs.', 'Badmotorfinger',
              'Superunknown', 'Louder Than Love', 'Jar Of Flies',
              'Dirt'
            ]);
            $new_album->artist_id = $i + 1;
            $new_album->image_id = $j + 1;
            $new_album->year = $faker->year();
            $new_album->save();
          }

        }
    }
}
