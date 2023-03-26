<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'job' => 'admin',
        ];

        $user = User::create($data);
        $user->assignRole('admin');
        //--------------------------------

        //PIC Project
        $data = [
            'name' => 'PIC Project',
            'email' => 'pic_project@gmail.com',
            'password' => Hash::make('pic_project123'),
            'job' => 'pic_project',
        ];

        $user = User::create($data);
        $user->assignRole('pic_project');
        //------------------------------

        //Programmer
        $data = [
            'name' => 'Programmer',
            'email' => 'programmer@gmail.com',
            'password' => Hash::make('programmer123'),
            'job' => 'programmer',
        ];

        $user = User::create($data);
        $user->assignRole('programmer');

    }
}
