<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Mahasiswa::create([
            'username' => 'munawar_ahmad',
            'address' => 'Perumahan Bogor Peace Village, Ciseeng, Bogor'
        ]);

        Mahasiswa::create([
            'username' => 'shinta_purnama',
            'address' => 'Perumahan Bogor Peace Village, Ciseeng, Bogor'
        ]);

        Mahasiswa::create([
            'username' => 'muneeb_ahmad',
            'address' => 'Perumahan Bogor Peace Village, Ciseeng, Bogor'
        ]);

        Mahasiswa::create([
            'username' => 'zakiyya sidiqa',
            'address' => 'Perumahan Bogor Peace Village, Ciseeng, Bogor'
        ]);
        
    }
}
