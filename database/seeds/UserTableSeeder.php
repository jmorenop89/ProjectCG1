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
                )
           ]
        );
    }
}
