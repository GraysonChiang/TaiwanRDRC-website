<?php

use Illuminate\Database\Seeder;
use Sunra\PhpSimple\HtmlDomParser;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call(newsPostSeeder::class);


    }
}
