<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('users')->insert([
        ['name' => 'test1',
        'email' => 'test1@test.com',
        'password' => Hash::make('password123'),
        ],[
        'name' => 'test2',
        'email' => 'test2@test.com',
        'password' => Hash::make('password123')
        ]
      ]);
    }
}
