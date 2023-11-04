<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('boards')->delete();
        
        \DB::table('boards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tablero1',
                'description' => 'Este es el tablero 1',
                'team_id' => 1,
                'created_at' => '2023-10-31 18:17:34',
                'updated_at' => '2023-10-31 18:17:34',
            ),
        ));
        
        
    }
}