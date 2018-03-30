<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'ROOT'
            ],
            [
                'name' => 'ADMIN'
            ],
            [
                'name' => 'MANAGER'
            ],
            [
                'name' => 'USER'
            ]
        ]);
    }
}
