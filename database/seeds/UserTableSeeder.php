<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $staffRole = Role::create(['name' => 'staff']);
        $memberRole = Role::create(['name' => 'member']);

        $password = 1234;

        // ---------- Administrator

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => $password,
        ]);

        $user->assignRole($adminRole);

        // ---------- Manager

        $user = User::create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => $password,
        ]);

        $user->assignRole($managerRole);

        // ---------- Staff

        $user = User::create([
            'name' => 'Staff',
            'email' => 'staff@example.com',
            'password' => $password,
        ]);

        $user->assignRole($staffRole);

        // ---------- Member

        $user = User::create([
            'name' => 'Member',
            'email' => 'member@example.com',
            'password' => $password,
        ]);

        $user->assignRole($memberRole);
    }
}
