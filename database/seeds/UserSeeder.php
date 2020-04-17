<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
			"name" => "Editor",
			"email" => "editor@upe.com", 
			"password" => Hash::make("12345678")]);
    }
}
