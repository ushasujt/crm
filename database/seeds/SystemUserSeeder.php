<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = [
            [
                'email'         => 'crm@workbank.com',
                'password'      => Hash::make('12345678'),
                'user_group_id'  => '1',

            ]
        ];

        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');

        DB::table ('users')->truncate ();

        DB::table ('users')->insert ($aData);
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');

        //entry to backend_user_profile table:

        $aSystemData = [
            'users_id' => 1,
            'fname' => 'Admin',

        ];

        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');

        DB::table ('user_profiles')->truncate ();

        DB::table ('user_profiles')->insert ($aSystemData);
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');
    }
}
