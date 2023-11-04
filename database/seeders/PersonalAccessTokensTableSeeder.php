<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'MyApp',
                'token' => '3af69a90b33d66cdc33c83eb8f98f40d3b99e7f626b8f511c11f2703737bbb1c',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:06:52',
                'updated_at' => '2023-10-31 18:06:52',
            ),
            1 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'MyApp',
                'token' => '001a9e7f44a0ef9ddb70f4050d0bd1adb0963e8cdf09515ef1801feae977f8e5',
                'abilities' => '["*"]',
                'last_used_at' => '2023-10-31 18:14:42',
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:07:00',
                'updated_at' => '2023-10-31 18:14:42',
            ),
            2 => 
            array (
                'id' => 3,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'MyApp',
                'token' => '5f0da83f274cbf18f3a6c9628fb92a27304939c6dc743c313206de743f7ce30a',
                'abilities' => '["*"]',
                'last_used_at' => '2023-10-31 18:15:20',
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:14:50',
                'updated_at' => '2023-10-31 18:15:20',
            ),
            3 => 
            array (
                'id' => 4,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 2,
                'name' => 'MyApp',
                'token' => '87e5aca4ea900c33168d6f55fdb96fe0b095819b2749390b8a53e1025b788bed',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:15:35',
                'updated_at' => '2023-10-31 18:15:35',
            ),
            4 => 
            array (
                'id' => 5,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 3,
                'name' => 'MyApp',
                'token' => 'e26053253103c9c10d2a3928450af45620b67fd6faab87ad0d70e0d4b59de9f5',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:16:00',
                'updated_at' => '2023-10-31 18:16:00',
            ),
            5 => 
            array (
                'id' => 6,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'MyApp',
                'token' => 'e5b0497d71712930eafe9ed6d8f3b478ce419b9a4be91e644001b80573b8f84e',
                'abilities' => '["*"]',
                'last_used_at' => '2023-11-04 10:23:21',
                'expires_at' => NULL,
                'created_at' => '2023-10-31 18:17:00',
                'updated_at' => '2023-11-04 10:23:21',
            ),
        ));
        
        
    }
}