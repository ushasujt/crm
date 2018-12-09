<?php

use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = [            
            ['Super Admin','1'],
            ['Admin','2'],
            ['Manager','3'],
        ];
        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');
        DB::table ('user_group_master')->truncate ();
        foreach ($aData as $purposes) {
            DB::table('user_group_master')->insert([
                    'group_name' => $purposes[0],
                    'hierarchy'=>$purposes[1]
                ]);
        }
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');
    }
}
