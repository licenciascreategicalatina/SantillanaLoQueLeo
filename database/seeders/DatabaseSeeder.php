<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // poblar la base de datos
        /* $listNameUsers = [ '', ''];
        $listEmailsUsers = [ '', ''];

        for ($i = 0; $i < count($listNameUsers); $i++) {
            DB::table('users')->insert([
                'name' => $listNameUsers[$i],
                'email' => $listEmailsUsers[$i],
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        } */

        DB::table('users')->insert([
            'name' => 'Rodinson Samuel Tombe',
            'email' => 'rstombe@unimayor.edu.co',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(2)->create();
    }
}
