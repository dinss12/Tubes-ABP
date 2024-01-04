<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name'=>'ini akun Admin',
                'email'=>'admin@admin.com',
                'level'=>'admin',
                'password'=> 'admin',
            ],
            [
                'username' => 'user',
                'name'=>'ini akun User (non admin)',
                'email'=>'user@user.com',
                'level'=>'editor',
                'password'=> 'user',
            ],
        ];

        foreach ($user as $value) {
            Customer::create($value);
        }
    }
}
