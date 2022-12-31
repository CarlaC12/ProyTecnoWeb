<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'=>'Juan Perez',
            'ci'=>'1122334 SC',
            'email'=>'juan@gmail.com',
            'password'=>Hash::make('123123'),            
        ]);

        User::create([
            'name'=>'Liliana Torrico',
            'ci'=>'4332211 SC',
            'email'=>'liliana@gmail.com',
            'password'=>Hash::make('123123'),
        ]);

        User::create([
            'name'=>'Pedro Perez',
            'ci'=>'1122339 SC',
            'email'=>'pedro@gmail.com',
            'password'=>Hash::make('123123'),
        ]);

        User::create([
            'name'=>'Maria Selva',
            'ci'=>'3899741 SC',
            'email'=>'maria@gmail.com',
            'password'=>Hash::make('123123'),
        ]);
    }
}
