<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Joseph Noel Coscos',
                'email' => 'coscosnoel@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('coscos123')
            ],
            [
                'name' => 'Jun Carlo Coscos',
                'email' => 'coscoscarlo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('coscos123')
            ],
            [
                'name' => 'John Ritchie Coscos',
                'email' => 'coscosjohnritchie@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('coscos123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
            
        }

    }
}
