<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'title' => str_random(10),
            'description' => str_random(10),
            'body' => str_random(256),
        ]);
    }
}
