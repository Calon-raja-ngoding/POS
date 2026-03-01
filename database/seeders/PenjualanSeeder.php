<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id'=>1,'user_id'=>3,'pembeli'=>'Budi','penjualan_kode'=>'TRX01','penjualan_tanggal'=>'2026-03-01 13:00:00'],
            ['penjualan_id'=>2,'user_id'=>3,'pembeli'=>'Siti','penjualan_kode'=>'TRX02','penjualan_tanggal'=>'2026-03-01 13:10:00'],
            ['penjualan_id'=>3,'user_id'=>3,'pembeli'=>'Andi','penjualan_kode'=>'TRX03','penjualan_tanggal'=>'2026-03-01 13:20:00'],
            ['penjualan_id'=>4,'user_id'=>3,'pembeli'=>'Rina','penjualan_kode'=>'TRX04','penjualan_tanggal'=>'2026-03-01 13:30:00'],
            ['penjualan_id'=>5,'user_id'=>3,'pembeli'=>'Dewi','penjualan_kode'=>'TRX05','penjualan_tanggal'=>'2026-03-01 13:40:00'],
            ['penjualan_id'=>6,'user_id'=>3,'pembeli'=>'Agus','penjualan_kode'=>'TRX06','penjualan_tanggal'=>'2026-03-01 14:00:00'],
            ['penjualan_id'=>7,'user_id'=>3,'pembeli'=>'Tono','penjualan_kode'=>'TRX07','penjualan_tanggal'=>'2026-03-01 14:10:00'],
            ['penjualan_id'=>8,'user_id'=>3,'pembeli'=>'Lina','penjualan_kode'=>'TRX08','penjualan_tanggal'=>'2026-03-01 14:20:00'],
            ['penjualan_id'=>9,'user_id'=>3,'pembeli'=>'Putra','penjualan_kode'=>'TRX09','penjualan_tanggal'=>'2026-03-01 14:30:00'],
            ['penjualan_id'=>10,'user_id'=>3,'pembeli'=>'Maya','penjualan_kode'=>'TRX10','penjualan_tanggal'=>'2026-03-01 14:40:00'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
