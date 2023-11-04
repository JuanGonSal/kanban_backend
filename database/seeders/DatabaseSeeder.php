<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);

        $this->call(TeamsTableSeeder::class);
        $this->call(TeamUserTableSeeder::class);

        $this->call(BoardsTableSeeder::class);
        $this->call(ColumnsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        $this->call(TagTaskTableSeeder::class);
    }
}
