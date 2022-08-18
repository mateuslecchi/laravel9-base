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
        $this->call([
            /**
             * Requisitos de Sistema
             */
            FreshInstallSeeder::class,
            SuperAdminSeeder::class,

            /**
             * Ambiente de testes
             */
        ]);
    }
}
