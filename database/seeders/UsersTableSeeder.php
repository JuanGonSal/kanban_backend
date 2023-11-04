<?php

namespace Database\Seeders;

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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$elNqoxkl3UjjGXkA8PklpuMXtn9bsr9FJK/d2rzSIXd0vb9/OOf5O',
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-10-31 18:06:52',
                'updated_at' => '2023-10-31 18:06:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gestor',
                'email' => 'gestor@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9OPKXz9wf5xPCVh8wGzTNuS2OadHwNPTBbJnvwlqrD4uRIBT6l/ku',
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-10-31 18:15:35',
                'updated_at' => '2023-10-31 18:15:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Usuario',
                'email' => 'usuario@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m9IYtWtSpvoUMyM17pzGVe3OVv2i9NtM5kLvtx0q6BwqI.yvf35zy',
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-10-31 18:16:00',
                'updated_at' => '2023-10-31 18:16:00',
            ),
        ));
        
        
    }
}