<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Create default config
        $user = [
            [
                'idPegawai' => '6',
                'name' => 'Default User',
                'username' => 'default.user',
                'email' => 'default_user@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 0,
                'role' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPegawai' => '3',
                'name' => 'Pengarah Ukur Bahagian',
                'username' => 'pub.jupem',
                'email' => 'pub@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 0,
                'role' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPegawai' => '4',
                'name' => 'Unit Tatatertib',
                'username' => 'tatatertib.jupem',
                'email' => 'tatatertib@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 0,
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPegawai' => '5',
                'name' => 'Bahagian Khidmat Pengurusan',
                'username' => 'bkp.jupem',
                'email' => 'bkp@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 0,
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPegawai' => '7',
                'name' => 'JKKPL',
                'username' => 'jkkpl.jupem',
                'email' => 'jkkpl@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 0,
                'role' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPegawai' => '10',
                'name' => 'Admin',
                'username' => 'admin.jupem',
                'email' => 'admin@jupem.gov.my',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'isAdmin' => 1,
                'role' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $role = [
            [
                'roleName' => 'PUB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roleName' => 'UTT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roleName' => 'BKP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roleName' => 'JKKPL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert
        User::insert($user);
        Role::insert($role);

    }

}
