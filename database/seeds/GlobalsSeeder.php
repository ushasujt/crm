<?php

use Illuminate\Database\Seeder;

class GlobalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = [            
            ['email_from_address','no-reply@workbank.com','Email From address'],
            ['email_from_name','Workbank CRM','Email From Name'],
        ];
        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');
        DB::table ('globals')->truncate ();
        foreach ($aData as $purposes) {
            DB::table('globals')->insert([
                    'field_name' => $purposes[0],
                    'field_value'=>$purposes[1],
                    'display_name'=>$purposes[2],
                    'users_id'    =>isset($purposes[3])?$purposes[3]:null,
                ]);
        }
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');
    }
}
