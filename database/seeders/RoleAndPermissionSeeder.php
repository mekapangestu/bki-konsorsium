<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAndPermissionSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // Seed Table Roles
        DB::table('roles')->delete();

        DB::table('roles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'superadmin',
                'guard_name' => 'web',
                'created_at' => '2022-05-09 01:51:27',
                'updated_at' => '2022-05-09 01:51:27',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'pemasaran',
                'guard_name' => 'web',
                'created_at' => '2022-05-09 01:56:33',
                'updated_at' => '2022-05-09 01:56:33',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'operasi',
                'guard_name' => 'web',
                'created_at' => '2022-05-09 01:56:39',
                'updated_at' => '2022-05-09 01:56:39',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'keuangan',
                'guard_name' => 'web',
                'created_at' => '2022-05-09 01:56:39',
                'updated_at' => '2022-05-09 01:56:39',
            )
        ));
    }
}
