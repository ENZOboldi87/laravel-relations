<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
         for ($i=0; $i < 6; $i++) {
             $new_artist = new Artist();
             $new_artist->artist = $faker->randomElement([
               'Nirvana',
               'Soundgarden',
               'Pearl Jam',
               'Stone Temple Pilots',
               'Audioslave',
               'Temple Of The Dogs',
               'Alice In Chains',
               'Mad Season'
             ]);
             $new_artist->save();
         }
     }
}
