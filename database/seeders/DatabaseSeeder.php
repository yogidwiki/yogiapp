<?php
 
namespace Database\Seeders;
 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            [ 'judul' => 'Wonder Women','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2021, 'rating' => 4.0,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
           [ 'judul' => 'Superman','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2018, 'rating' => 4.4,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
           [ 'judul' => 'Batman','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2020, 'rating' => 4.3,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
           [ 'judul' => 'Antman','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2019, 'rating' => 4.4,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
           [ 'judul' => 'Ironman','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2022, 'rating' => 4.6,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
           [ 'judul' => 'Avatar','sinopsis' => 'Merupakan film yang sangat keren','tahun' => 2017, 'rating' => 4.7,'img_url' => 'https://dummyimage.com/300.png/09f/fff'],
        ]);
    }
}