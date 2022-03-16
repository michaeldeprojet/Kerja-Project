<?php

namespace Database\Seeders;

use App\Models\JurnalPkl;
use App\Models\Login;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'AdminPKL123',
                'password' => Hash::make('Wikrama2022'),
                'role' => Login::ADMIN,
            ],
            [
                'username' => 'Kakomli123',
                'password' => Hash::make('Wikrama2022'),
                'role' => Login::KAKOMLI,
            ],
            [
                'username' => 'Pembimbing123',
                'password' => Hash::make('Wikrama2022'),
                'role' => Login::PEMBIMBING,
            ],
            [
                'username' => 'Siswa123',
                'password' => Hash::make('Wikrama2022'),
                'role' => Login::SISWA,
            ],
        ];

        foreach($users as $user) {
            Login::create($user);
        }
        $this->call(JurusanSeeder::class);

        //JurnalPkl::factory()->count(10)->create();
    }
}
