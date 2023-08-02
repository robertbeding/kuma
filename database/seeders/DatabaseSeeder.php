<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Reno Meriyadi',
        //     'email' => 'reno@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Robert Beding',
        //     'email' => 'robert@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // User::create([
        //     'name' => 'Cipta Thegar',
        //     'email' => 'cipta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(5)->create();

        Post::factory(8)->create();

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);


        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
        //     laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
        //     laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
        //     laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
        //     laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
        //     similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
        //     laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

    }
}
