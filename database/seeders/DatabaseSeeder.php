<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rifqi Muliawan',
            'email' => 'muliawan027@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Kevin Fredrian Syach',
            'email' => 'kevin222@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nesciunt 
            facere.Maiores, ipsa doloremque expedita non aut, reprehenderit delectus dolor soluta 
            impedit blanditiis ducimus in at animi unde consectetur quaerat deleniti odit 
            totam, nostrum voluptatum recusandae et iusto beatae alias. Facilis nemo 
            voluptatem rerum deleniti fugit, fuga quis, cupiditate provident atque quos
             veritatis. Quaerat repudiandae magnam asperiores maxime consequatur dicta 
             necessitatibus modi earum eaque harum? Consequuntur illo minima, odio 
             voluptate nam voluptatum dolor? Modi, hic aperiam quae at culpa corrupti 
             earum maxime dolores cum saepe labore eos unde molestias officiis ipsa iure 
             porro, minima quos necessitatibus nesciunt error. Dignissimos, adipisci.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum ke dua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nesciunt 
            facere.Maiores, ipsa doloremque expedita non aut, reprehenderit delectus dolor soluta 
            impedit blanditiis ducimus in at animi unde consectetur quaerat deleniti odit 
            totam, nostrum voluptatum recusandae et iusto beatae alias. Facilis nemo 
            voluptatem rerum deleniti fugit, fuga quis, cupiditate provident atque quos
             veritatis. Quaerat repudiandae magnam asperiores maxime consequatur dicta 
             necessitatibus modi earum eaque harum? Consequuntur illo minima, odio 
             voluptate nam voluptatum dolor? Modi, hic aperiam quae at culpa corrupti 
             earum maxime dolores cum saepe labore eos unde molestias officiis ipsa iure 
             porro, minima quos necessitatibus nesciunt error. Dignissimos, adipisci.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum ke tiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nesciunt 
            facere.Maiores, ipsa doloremque expedita non aut, reprehenderit delectus dolor soluta 
            impedit blanditiis ducimus in at animi unde consectetur quaerat deleniti odit 
            totam, nostrum voluptatum recusandae et iusto beatae alias. Facilis nemo 
            voluptatem rerum deleniti fugit, fuga quis, cupiditate provident atque quos
             veritatis. Quaerat repudiandae magnam asperiores maxime consequatur dicta 
             necessitatibus modi earum eaque harum? Consequuntur illo minima, odio 
             voluptate nam voluptatum dolor? Modi, hic aperiam quae at culpa corrupti 
             earum maxime dolores cum saepe labore eos unde molestias officiis ipsa iure 
             porro, minima quos necessitatibus nesciunt error. Dignissimos, adipisci.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum ke empat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nesciunt 
            facere.Maiores, ipsa doloremque expedita non aut, reprehenderit delectus dolor soluta 
            impedit blanditiis ducimus in at animi unde consectetur quaerat deleniti odit 
            totam, nostrum voluptatum recusandae et iusto beatae alias. Facilis nemo 
            voluptatem rerum deleniti fugit, fuga quis, cupiditate provident atque quos
             veritatis. Quaerat repudiandae magnam asperiores maxime consequatur dicta 
             necessitatibus modi earum eaque harum? Consequuntur illo minima, odio 
             voluptate nam voluptatum dolor? Modi, hic aperiam quae at culpa corrupti 
             earum maxime dolores cum saepe labore eos unde molestias officiis ipsa iure 
             porro, minima quos necessitatibus nesciunt error. Dignissimos, adipisci.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}


