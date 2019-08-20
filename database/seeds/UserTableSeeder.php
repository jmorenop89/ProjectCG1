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
        //Accion es de elminar los datos
        //borra los datos de la table Users
        DB::table('users')->delete();
        
        //Accion de insertar datos
        DB::table('users')->insert(
           [
                array(
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'admin@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 2,
                    'name' => 'admin2',
                    'email' => 'admin2@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 3,
                    'name' => 'admin3',
                    'email' => 'admin3@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 4,
                    'name' => 'admin4',
                    'email' => 'admin4@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 5,
                    'name' => 'admin5',
                    'email' => 'admin5@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 6,
                    'name' => 'admin6',
                    'email' => 'admin6@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 7,
                    'name' => 'admin7',
                    'email' => 'admin7@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 8,
                    'name' => 'admin8',
                    'email' => 'admin8@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 9,
                    'name' => 'admin9',
                    'email' => 'admin9@mail.com',
                    'password' => bcrypt('123456')
                ),
                array(
                    'id' => 10,
                    'name' => 'admin10',
                    'email' => 'admin10@mail.com',
                    'password' => bcrypt('123456')
                )
           ]
        );
    }
}
