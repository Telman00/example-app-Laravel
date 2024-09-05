<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i <6 ; $i++) { 
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' =>  Hash::make('password'),
                'remember_token' => Str::random(10),
                'is_admin' => 1,
            ]);
        }


         User::where('id','!=',1)->update(['is_admin'=>2]);
       
    }
}
