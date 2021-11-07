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
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Widanta',
        //     'email' => 'widanta66@gmail.com',
        //     'password' => bcrypt('2005')
        // ]);

        // User::create([
        //     'name' => 'Tata',
        //     'email' => 'tata@gmail.com',
        //     'password' => bcrypt('2005')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam aperiam sequi in provident optio atque nobis neque recusandae deleniti odio aspernatur quasi non quod possimus eum ipsum, mollitia asperiores voluptate sunt iusto repudiandae? Consequatur laborum ipsam illo quia optio beatae et nam laboriosam dolor libero qui eveniet sapiente eum asperiores, architecto eius cum nihil nostrum dolorem suscipit sed vitae minima quaerat? Distinctio dolores expedita reprehenderit voluptatibus excepturi voluptate. Quasi a in quo quas quaerat consectetur, rem pariatur dicta ipsa facere ratione explicabo accusantium ipsam velit quam dignissimos commodi sit. Reiciendis voluptates labore nostrum rem earum sit officiis, aspernatur expedita.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit kedua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam aperiam sequi in provident optio atque nobis neque recusandae deleniti odio aspernatur quasi non quod possimus eum ipsum, mollitia asperiores voluptate sunt iusto repudiandae? Consequatur laborum ipsam illo quia optio beatae et nam laboriosam dolor libero qui eveniet sapiente eum asperiores, architecto eius cum nihil nostrum dolorem suscipit sed vitae minima quaerat? Distinctio dolores expedita reprehenderit voluptatibus excepturi voluptate. Quasi a in quo quas quaerat consectetur, rem pariatur dicta ipsa facere ratione explicabo accusantium ipsam velit quam dignissimos commodi sit. Reiciendis voluptates labore nostrum rem earum sit officiis, aspernatur expedita.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam aperiam sequi in provident optio atque nobis neque recusandae deleniti odio aspernatur quasi non quod possimus eum ipsum, mollitia asperiores voluptate sunt iusto repudiandae? Consequatur laborum ipsam illo quia optio beatae et nam laboriosam dolor libero qui eveniet sapiente eum asperiores, architecto eius cum nihil nostrum dolorem suscipit sed vitae minima quaerat? Distinctio dolores expedita reprehenderit voluptatibus excepturi voluptate. Quasi a in quo quas quaerat consectetur, rem pariatur dicta ipsa facere ratione explicabo accusantium ipsam velit quam dignissimos commodi sit. Reiciendis voluptates labore nostrum rem earum sit officiis, aspernatur expedita.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit keempat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam aperiam sequi in provident optio atque nobis neque recusandae deleniti odio aspernatur quasi non quod possimus eum ipsum, mollitia asperiores voluptate sunt iusto repudiandae? Consequatur laborum ipsam illo quia optio beatae et nam laboriosam dolor libero qui eveniet sapiente eum asperiores, architecto eius cum nihil nostrum dolorem suscipit sed vitae minima quaerat? Distinctio dolores expedita reprehenderit voluptatibus excepturi voluptate. Quasi a in quo quas quaerat consectetur, rem pariatur dicta ipsa facere ratione explicabo accusantium ipsam velit quam dignissimos commodi sit. Reiciendis voluptates labore nostrum rem earum sit officiis, aspernatur expedita.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
