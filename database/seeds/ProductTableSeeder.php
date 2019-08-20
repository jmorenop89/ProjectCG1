<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        
        DB::table('product')->insert(
           [
                array(
                    'name' => 'Lavadora LG',
                    'price' => 120.56,
                    'description' => ""
                ),
                array(
                    'name' => 'Televisor Plasma',
                    'price' => 1500,
                    'description' => ""
                ),
                array(
                    'name' => 'Plancha Imaco',
                    'price' => 34.5,
                    'description' => ""
                ),
                array(
                    'name' => 'Lavadora Samsung',
                    'price' => 120.56,
                    'description' => ""
                ),
                array(
                    'name' => 'Televisor LCD',
                    'price' => 1400,
                    'description' => ""
                ),
                array(
                    'name' => 'Microndas FF',
                    'price' => 134,
                    'description' => ""
                ),
                array(
                    'name' => 'Refrigeradora LG',
                    'price' => 1500,
                    'description' => ""
                ),
                array(
                    'name' => 'Plancha D',
                    'price' => 12.5,
                    'description' => ""
                ),
                array(
                    'name' => 'Televisor A',
                    'price' => 12.5,
                    'description' => ""
                )
           ]
        );
    }
}
