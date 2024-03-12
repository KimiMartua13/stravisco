<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterClass;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MasterClass::create([
            'id' => '01.',
            'name' => 'SMKN 2 Kota Bekasi',
        ]);


        // Akuntansi Dan Keuangan Lembaga
        MasterClass::create([
            'id' => '01.01.',
            'name' => 'Akuntansi Dan Keuangan Lembaga',
        ]);

        MasterClass::create([
            'id' => '01.01.01.',
            'name' => 'Akuntansi Dan Keuangan Lembaga 1',
        ]);

        MasterClass::create([
            'id' => '01.01.02.',
            'name' => 'Akuntansi Dan Keuangan Lembaga 2',
        ]);
        
        MasterClass::create([
            'id' => '01.01.03.',
            'name' => 'Akuntansi Dan Keuangan Lembaga 3',
        ]);





        // Rekayasa Perangkat Lunak
        MasterClass::create([
            'id' => '01.02.',
            'name' => 'Rekayasa Perangkat Lunak',
        ]);

        MasterClass::create([
            'id' => '01.02.01.',
            'name' => 'Rekayasa Perangkat Lunak 1',
        ]);

        MasterClass::create([
            'id' => '01.02.02.',
            'name' => 'Rekayasa Perangkat Lunak 2',
        ]);

        MasterClass::create([
            'id' => '01.02.03.',
            'name' => 'Rekayasa Perangkat Lunak 3',
        ]);

        MasterClass::create([
            'id' => '01.02.04.',
            'name' => 'Rekayasa Perangkat Lunak | Traspac',
        ]);



        // Teknik Elektronika Industri
        MasterClass::create([
            'id' => '01.03.',
            'name' => 'Teknik Elektronika Industri',
        ]);

        MasterClass::create([
            'id' => '01.03.01.',
            'name' => 'Teknik Elektronika Industri 1',
        ]);

        MasterClass::create([
            'id' => '01.03.02.',
            'name' => 'Teknik Elektronika Industri 2',
        ]);

        MasterClass::create([
            'id' => '01.03.03.',
            'name' => 'Teknik Elektronika Industri 3',
        ]);

        MasterClass::create([
            'id' => '01.03.04.',
            'name' => 'Teknik Elektronika Industri | Panasonic',
        ]);



        // Teknik Energi Terbarukan
        MasterClass::create([
            'id' => '01.04.',
            'name' => 'Teknik Energi Terbarukan',
        ]);

        MasterClass::create([
            'id' => '01.04.01.',
            'name' => 'Teknik Energi Terbarukan 1',
        ]);

        MasterClass::create([
            'id' => '01.04.02.',
            'name' => 'Teknik Energi Terbarukan 2',
        ]);

        MasterClass::create([
            'id' => '01.04.03.',
            'name' => 'Teknik Energi Terbarukan 3',
        ]);





        // Teknik Dan Bisnis Sepeda Motor
        MasterClass::create([
            'id' => '01.05.',
            'name' => 'Teknik Dan Bisnis Sepeda Motor',
        ]);

        MasterClass::create([
            'id' => '01.05.01.',
            'name' => 'Teknik Dan Bisnis Sepeda Motor 1',
        ]);

        MasterClass::create([
            'id' => '01.05.02.',
            'name' => 'Teknik Dan Bisnis Sepeda Motor 2',
        ]);

        MasterClass::create([
            'id' => '01.05.03.',
            'name' => 'Teknik Dan Bisnis Sepeda Motor 3',
        ]);


        // Teknik Komputer Dan Jaringan
        MasterClass::create([
            'id' => '01.06.',
            'name' => 'Teknik Komputer Dan Jaringan',
        ]);

        MasterClass::create([
            'id' => '01.06.01.',
            'name' => 'Teknik Komputer Dan Jaringan 1',
        ]);

        MasterClass::create([
            'id' => '01.06.02.',
            'name' => 'Teknik Komputer Dan Jaringan 2',
        ]);

        MasterClass::create([
            'id' => '01.06.03.',
            'name' => 'Teknik Komputer Dan Jaringan 3',
        ]);

        MasterClass::create([
            'id' => '01.06.04',
            'name' => 'Teknik Komputer Dan Jaringan | IconNet',
        ]);

        // User::factory(10)->create();
    }
}
