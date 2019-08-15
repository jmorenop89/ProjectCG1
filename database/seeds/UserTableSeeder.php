<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(
            array(
                array(
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'admin@mail.com',
                    'password' => bcrypt('123456')
                ),
            )
        );
    }
}
