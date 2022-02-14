<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post 
{
   private static $blog_posts = [
    [
        "title" => "Fiction",
        "slug" => "fiction",
        "author" => "Someone Who Cares",
        "publisher" => "Gramedoi inc.", 
        "year" => "2019",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, corrupti quisquam. Voluptatum accusamus hic qui repellendus aspernatur mollitia exercitationem nihil nemo voluptas, amet ipsum quidem error earum molestias totam quaerat, modi asperiores itaque culpa! Possimus earum error temporibus, blanditiis nihil iusto tempora veniam eligendi quod ex iste in dolores explicabo similique mollitia corporis nemo sunt deserunt, ipsum magni veritatis tenetur iure exercitationem sequi. Numquam vitae dolor, dolore voluptate ratione modi quia labore necessitatibus nemo! Illum nostrum eos deserunt eveniet non!"
    ],
    [
        "title" => "Fiction 2",
        "slug" => "fiction-2",
        "author" => "Someone Who Cares",
        "publisher" => "Gramedoi inc.", 
        "year" => "2019",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, corrupti quisquam. Voluptatum accusamus hic qui repellendus aspernatur mollitia exercitationem nihil nemo voluptas, amet ipsum quidem error earum molestias totam quaerat, modi asperiores itaque culpa! Possimus earum error temporibus, blanditiis nihil iusto tempora veniam eligendi quod ex iste in dolores explicabo similique mollitia corporis nemo sunt deserunt, ipsum magni veritatis tenetur iure exercitationem sequi. Numquam vitae dolor, dolore voluptate ratione modi quia labore necessitatibus nemo! Illum nostrum eos deserunt eveniet non!"
    ],
    [
        "title" => "Fiction 3",
        "slug" => "fiction-3",
        "author" => "Someone Who Cares",
        "publisher" => "Gramedoi inc.", 
        "year" => "2019",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, corrupti quisquam. Voluptatum accusamus hic qui repellendus aspernatur mollitia exercitationem nihil nemo voluptas, amet ipsum quidem error earum molestias totam quaerat, modi asperiores itaque culpa! Possimus earum error temporibus, blanditiis nihil iusto tempora veniam eligendi quod ex iste in dolores explicabo similique mollitia corporis nemo sunt deserunt, ipsum magni veritatis tenetur iure exercitationem sequi. Numquam vitae dolor, dolore voluptate ratione modi quia labore necessitatibus nemo! Illum nostrum eos deserunt eveniet non!"
    ],
    [
        "title" => "Science",
        "slug" => "science",
        "author" => "Someone Who Cares",
        "publisher" => "Gramedoi inc.", 
        "year" => "2019",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, corrupti quisquam. Voluptatum accusamus hic qui repellendus aspernatur mollitia exercitationem nihil nemo voluptas, amet ipsum quidem error earum molestias totam quaerat, modi asperiores itaque culpa! Possimus earum error temporibus, blanditiis nihil iusto tempora veniam eligendi quod ex iste in dolores explicabo similique mollitia corporis nemo sunt deserunt, ipsum magni veritatis tenetur iure exercitationem sequi. Numquam vitae dolor, dolore voluptate ratione modi quia labore necessitatibus nemo! Illum nostrum eos deserunt eveniet non!"
    ],
    [
        "title" => "Science 2",
        "slug" => "science-2",
        "author" => "Someone Who Cares",
        "publisher" => "Gramedoi inc.", 
        "year" => "2019",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, corrupti quisquam. Voluptatum accusamus hic qui repellendus aspernatur mollitia exercitationem nihil nemo voluptas, amet ipsum quidem error earum molestias totam quaerat, modi asperiores itaque culpa! Possimus earum error temporibus, blanditiis nihil iusto tempora veniam eligendi quod ex iste in dolores explicabo similique mollitia corporis nemo sunt deserunt, ipsum magni veritatis tenetur iure exercitationem sequi. Numquam vitae dolor, dolore voluptate ratione modi quia labore necessitatibus nemo! Illum nostrum eos deserunt eveniet non!"
    ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }

}
