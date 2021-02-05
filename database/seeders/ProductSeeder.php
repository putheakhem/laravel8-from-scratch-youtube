<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'First Product',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        DB::table('products')->insert([
            'name' => 'Second Product',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        DB::table('products')->insert([
            'name' => 'Third Product',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
    }
}
