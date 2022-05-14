<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['name'=>'fruit orange','price'=>'10','year'=>'2010','product_type'=>'fruit'],
        	['name'=>'fruit orange','price'=>'10','year'=>'2010','product_type'=>'grains'],
        	['name'=>'fruit orange','price'=>'10','year'=>'2010','product_type'=>'vegittable'],
        	['name'=>'fruit orange','price'=>'10','year'=>'2010','product_type'=>'fruit'],
    

        ]);
    }
}
