<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserRoleEnum;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@localscript.test',
            'role' => UserRoleEnum::ROLE_ADMIN,
        ]);
        User::factory(10)->create();
    }
}
