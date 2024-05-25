<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Food;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Christhoper',
        //     'email' => 'christhoper@gmail.com',
        //     'password' => bcrypt('111111')
        // ]);
        
        // Category::create([
        //     'name' => 'Appetizier',
        //     'slug' => 'appetizier'
        // ]);

        // Category::create([
        //     'name' => 'Main Course',
        //     'slug' => 'main course'
        // ]);

        // Category::create([
        //     'name' => 'Dessert',
        //     'slug' => 'dessert'
        // ]);

        // Food::create([
        //     'title' => 'Lumpia',
        //     'slug' => 'lumpia',
        //     'excerpt' => 'lumpia adalah makanan pembuka yang sangat cocok untuk',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reprehenderit ratione ab hic sed eveniet? Quis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Food::create([
        //     'title' => 'Nasi Goreng',
        //     'slug' => 'nasi goreng',
        //     'excerpt' => 'Nasi goreng adalah makanan khas indonesia yang sangat terkenal',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reprehenderit ratione ab hic sed eveniet? Quis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Food::create([
        //     'title' => 'Bakso',
        //     'slug' => 'bakso',
        //     'excerpt' => 'bakso adalah makanan khas indonesia yang terbuat dari daging yang berbentuk bulat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reprehenderit ratione ab hic sed eveniet? Quis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Food::create([
        //     'title' => 'Soto',
        //     'slug' => 'soto',
        //     'excerpt' => 'Soto, Coto, Sauto, Tauto adalah makanan khas Indonesia sejenis sup dengan kuah rebusan ayam atau sapi. Soto biasanya memakai dua jenis daging, yakni daging ayam dan dan daging sapi.',
        //     'body' => '<p> Soto, Coto, Sauto, Tauto adalah makanan khas Indonesia sejenis sup dengan kuah rebusan ayam atau sapi. Soto biasanya memakai dua jenis daging, yakni daging ayam dan dan daging sapi.</p>
        //     <p> Soto ayam memiliki kuah berwarna kekuningan dengan rasa gurih dan harum. Warna kuning dikarenakan dari kunyit, bawang merah, bawang putih sebagai bumbu dasarnya. Sedangkan soto daging biasa berwarna bening atau berkuah santan.</p>
        //     <p> Soto dapat ditemukan di tiap daerah, khususnya di pulau Jawa. banyak sekali varian soto di Indonesia, salah satunya adalah Soto Lamongan, Soto Kudus, Soto Betawi, Soto Bandung, Soto Padang, Soto Jepara, Soto Banjar, Coto Makasar, dll.</p>
        //     <p> Soto disajikan bersama pelengkap yang bervariasi di tiap daerah. Soto Bandung disajikan bersama lobak dan kacang kedelai goreng, Soto Kudus disajikan tauge rebus, Soto Lamongan disajikan bersama irisan kol, tomat dan koya, dll.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        Food::create([
            'title' => 'Sate',
            'slug' => 'Sate',
            'excerpt' => 'Sate adalah ............',
            'body' => '<p> sate disajikan bersama potongan daging sapi, rebusan kecambah dan telur asin serta kerupuk udang.</p>',
            'category_id' => 2,
            'user_id' => 7
        ]);
      

    }
}
