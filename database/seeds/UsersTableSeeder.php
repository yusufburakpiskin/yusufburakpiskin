<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('test');

        $users = [
            ['adi' => 'test', 'password' => $password, 'email' => 'test@test.com', 'yetki'=>'1', 'remember_token'=>null],
        ];
//upp
        DB::table('kullanicilar')->insert($users);

    }
}
