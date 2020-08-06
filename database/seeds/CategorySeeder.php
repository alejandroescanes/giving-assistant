<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('categories')->insert([
                'name' => 'Accessories',
            ]);
            DB::table('categories')->insert([
                'name' => 'Health & Beauty',
            ]);
            DB::table('categories')->insert([
                'name' => 'Clothing',
            ]);

        }
    }
}
