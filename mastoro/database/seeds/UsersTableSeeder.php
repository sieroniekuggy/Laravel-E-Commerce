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
                'role_id' => NULL,
                'name' => 'Silence Ronald Kugotsi',
                'email' => 'sieroniekuggy@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CTiIVxvxgK71VUESMqAw9.zj8UDiYFMcZ/VDK27Ulnyu4arb3wekm',
                'remember_token' => 'c0mlbMSZKSNhrPvvrSVEV9S5iK4ZM2hQXUA5ZB60ToKZD5VE4qMcjtoDCFui',
                'settings' => NULL,
                'created_at' => '2020-08-03 14:17:28',
                'updated_at' => '2020-08-03 14:17:28',
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R.VPd5TC0QWw.Cr9dd8vD.mlSdK1o/YyYTgQwNKWOSb6K6sL5dqoO',
                'remember_token' => 'mZLYiKQFS8XuSkCapofC2bAB6JrrmCvQdIOX70rPi7JGESfNo3FqvHAEka4X',
                'settings' => NULL,
                'created_at' => '2020-08-03 22:46:43',
                'updated_at' => '2020-08-03 22:46:43',
            ),
        ));
        
        
    }
}