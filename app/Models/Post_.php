<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifqi Muliawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fugiat soluta omnis error adipisci consectetur earum, esse
            odit quam sunt tempore accusamus beatae in? Officia natus autem, 
            cum praesentium quod et explicabo, deserunt debitis nisi sapiente earum aliquid, 
            voluptatibus sed quasi odio tenetur excepturi ab quas illo. Sint corporis nisi accusantium ad 
            rerum consequatur vel necessitatibus obcaecati omnis quam, atque error nemo non,
            perferendis cumque vitae dolorem labore sequi soluta blanditiis iure. 
            Dicta quidem laborum ea nulla accusantium culpa animi perferendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Fredrian Syach",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ut atque obcaecati consequuntur, 
            corrupti reprehenderit eveniet corporis. Corrupti eveniet, nesciunt error vitae, suscipit quas adipisci, 
            distinctio fugiat sunt consectetur ratione ut voluptatum eaque tempora. Numquam delectus vitae doloremque reprehenderit. 
            Quas accusamus aut soluta officia totam illo itaque, eos quasi eveniet! Qui totam amet alias repudiandae quibusdam odio cumque, 
            ipsam inventore deleniti magnam saepe rem delectus eos ad exercitationem architecto quasi facere soluta. 
            Eos, ipsa exercitationem molestiae cum maxime amet nisi eaque quae! Ducimus explicabo a corrupti mollitia. 
            Velit maiores commodi temporibus quae totam vitae tempore architecto. Illum cumque laborum voluptatum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts ->firstWhere('slug', $slug);
    }
}
