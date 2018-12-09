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
       // $this->call(PermissionSeeder::class);
        $this->call(UserGroupSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(SystemUserSeeder::class);
        $this->call(GlobalsSeeder::class);
        
    }
}
