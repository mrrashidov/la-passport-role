<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'SuperAdmin',
            ],
            [
                'id' => 2,
                'title' => 'Admin',
            ],
            [
                'id' => 3,
                'title' => 'SuperModer',
            ],
            [
                'id' => 4,
                'title' => 'Moder',
            ],
            [
                'id' => 5,
                'title' => 'User',
            ],
        ];

        Role::insert($roles);
    }
}
