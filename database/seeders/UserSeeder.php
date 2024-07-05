<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create ([
            'fname'=>'wathek',
            'lname'=>'alyousefi',
            'email'=>'wathekalyousefi@gmail.com',
            'password'=> Hash::make('password'),
            'is_admin'=>1
        ]);
    }
}
