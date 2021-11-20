<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon\Carbon::now()
            // or can make using Str::random
        ]);
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test1234'),
            'created_at' => Carbon\Carbon::now()
        ]);
    }
}
