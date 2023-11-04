<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColumnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('columns')->delete();
        
        \DB::table('columns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Backlog',
                'order' => 10,
                'board_id' => 1,
                'created_at' => '2023-10-31 18:17:34',
                'updated_at' => '2023-10-31 18:17:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Doing',
                'order' => 20,
                'board_id' => 1,
                'created_at' => '2023-10-31 18:17:34',
                'updated_at' => '2023-10-31 18:17:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Done',
                'order' => 30,
                'board_id' => 1,
                'created_at' => '2023-10-31 18:17:34',
                'updated_at' => '2023-10-31 18:17:34',
            ),
        ));
        
        
    }
}