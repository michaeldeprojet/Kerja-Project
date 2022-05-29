<?php

namespace Database\Seeders;

use App\Models\JurnalPkl;
use App\Models\Login;
use App\Models\User;
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
        $login = [
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

        $users = [
            [
                'username' => 'AdminPKL123',
                'password' => Hash::make('Wikrama2022'),
                'jurusan_id' => 1,
                'role' => User::ADMIN,
            ],
            [
                'username' => 'Kakomli123',
                'password' => Hash::make('Wikrama2022'),
                'jurusan_id' => 1,
                'role' => User::KAKOMLI,
            ],
            [
                'username' => 'Pembimbing123',
                'password' => Hash::make('Wikrama2022'),
                'jurusan_id' => 1,
                'role' => User::PEMBIMBING,
            ],
            [
                'username' => 'Siswa123',
                'password' => Hash::make('Wikrama2022'),
                'jurusan_id' => 1,
                'role' => User::SISWA,
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
        foreach($login as $user) {
            Login::create($user);
        }
        $this->call(JurusanSeeder::class);

        //JurnalPkl::factory()->count(10)->create();
    }
}
