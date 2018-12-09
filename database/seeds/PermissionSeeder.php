<?php

use Illuminate\Database\Seeder;
use App\Models\PermissionRole;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
                    [
                    "name"=>"add_user",
                    "permission_type"=>5,
                    "display_name"=>"Add user",
                    "user_group_ids"=>"1",
                    "action"=>"index",
                    "controller"=>"TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_task",
                    "permission_type"=>5,
                    "display_name"=>"View Task",
                    "action"=>"fetchTasks",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
            ];

            

        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');
        DB::table ('permissions')->truncate ();
        DB::table ('permissions')->insert ($data);
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');

    }
}
