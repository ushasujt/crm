<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userGroupSeeder::class);
         $this->call(userRolesSeeder::class);
         $this->call(systemUserSeeder::class);
    }
}
