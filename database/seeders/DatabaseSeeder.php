<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        \App\Models\Article::insert(
            [
                [
                    'title' => 'Hello World',
                    'description' => 'Hello, World!" program is generally a computer program that outputs or displays the message "Hello, World!"',
                    'slug' => 'hello-world',
                    'body' => '<p>A "Hello, World!" program is generally a computer program that outputs or displays the message "Hello, World!". This program is very simple to write in many programming languages, and is often used to illustrate a languages basic syntax. Hello, World! programs are often the first a student learns to write in a given language, and they can also be used as a sanity test to ensure computer software intended to compile or run source code is correctly installed, and that its operator understands how to use it.</p>',
                    'created_at' => '2021-12-12 12:12:12',
                    'updated_at' => '2021-12-12 12:12:12',
                ],
                [
                    'title' => 'What is Lorem Ipsum ?',
                    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                    'slug' => 'what-is',
                    'body' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>',
                    'created_at' => '2021-12-12 12:12:12',
                    'updated_at' => '2021-12-12 12:12:12',
                ]
            ]
        );
    }
}
