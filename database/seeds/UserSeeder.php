<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'TestUser1',
            'email' => 'testuser1@gmail.com',
            'password' => bcrypt('123qwe'),
            'remember_token' => str_random(10),
        ])->roles()->attach(Role::ROOT);

        User::create([
            'name' => 'TestUser1',
            'email' => 'testuser2@gmail.com',
            'password' => bcrypt('123qwe'),
            'remember_token' => str_random(10),
        ])->roles()->attach(Role::ADMIN);

        User::create([
            'name' => 'TestUser1',
            'email' => 'testuser3@gmail.com',
            'password' => bcrypt('123qwe'),
            'remember_token' => str_random(10),
        ])->roles()->attach(Role::MANAGER);

        User::create([
            'name' => 'TestUser1',
            'email' => 'testuser4@gmail.com',
            'password' => bcrypt('123qwe'),
            'remember_token' => str_random(10),
        ])->roles()->attach(Role::USER);
    }
}
