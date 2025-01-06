<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**cl
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Faqih Fikrulsyah Harun',
                'email'=>'faqihharun@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas Keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas Marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketin',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
