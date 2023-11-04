<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTaskTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tag_task')->delete();
        
        \DB::table('tag_task')->insert(array (
            0 => 
            array (
                'id' => 9,
                'task_id' => 1,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10,
                'task_id' => 5,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}