<?php

use Illuminate\Database\Seeder;

class userRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = [             
            ['Sales Manager','1'],
            ['Accounts Manager','2'],
        ];
        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');
        DB::table ('user_role_master')->truncate ();
        foreach ($aData as $purposes) {
            DB::table('user_role_master')->insert([
                    'role_name' => $purposes[0],
                    'hierarchy'=>$purposes[1]
                ]);
        }
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');
    }
}
