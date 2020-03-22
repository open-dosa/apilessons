<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->truncate();
        DB::table('users')->truncate();

        $this->call(LessonsTableSeeder::class);
        $this->call(UsersTableSeeder::class);        
    }
}
