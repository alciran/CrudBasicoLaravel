<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        DB::collection('databases')->insert([
            'name' => Str::random(10),
            //'username' => Str::random(10),
            'password' => Hash::make('password'),
            'last_login' =>'',
            'is_active' => 'true',
            'role'=>'manager'
        ]);
    }
}
