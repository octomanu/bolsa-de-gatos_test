<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\User::class, 10)->create();
    }

=======
>>>>>>> 6befa37d2430989de6d519db82f40d233bdceadb

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mechi',
            'email' => 'mechi@octopus.com.ar',
            'password' => bcrypt('123456'),
        ]);
    }
<<<<<<< HEAD
=======
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\User::class, 10)->create();
    }

>>>>>>> add jwt login
=======
>>>>>>> upstream/master
>>>>>>> 6befa37d2430989de6d519db82f40d233bdceadb
}
