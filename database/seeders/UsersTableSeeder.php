<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Superadmin',
                'email' => 'sadmin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R.MtlCCjYTSw98fdUxqq0./TzcxMjZ4CJkaHl6nEPDynEt.MH1Jxy',
                'remember_token' => NULL,
                'role_id' => 1,
                'created_at' => '2022-10-21 14:26:59',
                'updated_at' => '2022-10-21 14:26:59',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Admin Pemasaran',
                'email' => 'pemasaran@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R.MtlCCjYTSw98fdUxqq0./TzcxMjZ4CJkaHl6nEPDynEt.MH1Jxy',
                'remember_token' => NULL,
                'role_id' => 2,
                'created_at' => '2022-10-21 14:26:59',
                'updated_at' => '2022-10-21 14:26:59',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Admin Operasi',
                'email' => 'operasi@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R.MtlCCjYTSw98fdUxqq0./TzcxMjZ4CJkaHl6nEPDynEt.MH1Jxy',
                'remember_token' => NULL,
                'role_id' => 3,
                'created_at' => '2022-10-21 14:26:59',
                'updated_at' => '2022-10-21 14:26:59',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Admin Keuangan',
                'email' => 'keuangan@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R.MtlCCjYTSw98fdUxqq0./TzcxMjZ4CJkaHl6nEPDynEt.MH1Jxy',
                'remember_token' => NULL,
                'role_id' => 4,
                'created_at' => '2022-10-21 14:26:59',
                'updated_at' => '2022-10-21 14:26:59',
            ),
        ));
    }
}
