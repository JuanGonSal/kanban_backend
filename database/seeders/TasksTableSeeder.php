<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Tarea5',
                'description' => 'Esta es la tarea 1',
                'order' => 0,
                'column_id' => 1,
                'created_at' => '2023-10-31 18:18:23',
                'updated_at' => '2023-11-04 10:23:20',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'Titulo bien',
                'description' => 'Descripcion bien',
                'order' => 0,
                'column_id' => 2,
                'created_at' => '2023-11-02 18:37:59',
                'updated_at' => '2023-11-04 10:16:06',
            ),
        ));
        
        
    }
}