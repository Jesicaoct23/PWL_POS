<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 1,
                'kategori_nama' => 'Kategori barang elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 2,
                'kategori_nama'=> 'Kategori barang pakaian',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 3,
                'kategori_nama' => 'Kategori barang makanan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 4,
                'kategori_nama'=> 'Kategori barang alat rumah tangga',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 5,
                'kategori_nama'=> 'Kategori barang otomotif',
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
