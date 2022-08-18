<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando Super Usuario Padrão e definindo-o com o papel de Super-Admin
        $userpadrao = User::create([
            'name' => env('SUPER_ADMIM_NAME', 'Super Admin'),
            'email' => env('SUPER_ADMIM_EMAIL', 'super@admin.com'),
            'password' => Hash::make(env('SUPER_ADMIM_PASSWORD', 'secret')),
            'change_password_at' => now(),
        ]);
        $userpadrao->assignRole('Super Admin');
    }
}
