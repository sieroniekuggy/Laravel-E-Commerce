<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@skug.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-02-09 12:42:53',
                'password' => '$2y$12$5/Ps.xVXkfDdFRc4uF.WguqDflSYW6AoDmkKh9DtYiuRhI3FsFDk2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-09 12:42:53',
                'updated_at' => '2020-02-11 00:15:23',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'customer 1',
                'email' => 'customer@skug.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$5/Ps.xVXkfDdFRc4uF.WguqDflSYW6AoDmkKh9DtYiuRhI3FsFDk2',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'customer 2',
                'email' => 'customer2@skug.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$5/Ps.xVXkfDdFRc4uF.WguqDflSYW6AoDmkKh9DtYiuRhI3FsFDk2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@skug.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$5/Ps.xVXkfDdFRc4uF.WguqDflSYW6AoDmkKh9DtYiuRhI3FsFDk2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@skug.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$5/Ps.xVXkfDdFRc4uF.WguqDflSYW6AoDmkKh9DtYiuRhI3FsFDk2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
        ));


    }
}
