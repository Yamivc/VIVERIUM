<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member; // Asegúrate de tener el modelo importado

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'email' => 'Admin@admin.admin.es',
            'password' => bcrypt('test1234') // Cifra la contraseña antes de guardarla
        ]);
    }
}
