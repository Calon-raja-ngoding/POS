<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id'=>1,'kategori_id'=>1,'barang_kode'=>'BRG01','barang_nama'=>'Beras 5kg','harga_beli'=>50000,'harga_jual'=>60000],
            ['barang_id'=>2,'kategori_id'=>2,'barang_kode'=>'BRG02','barang_nama'=>'Teh Botol','harga_beli'=>3000,'harga_jual'=>5000],
            ['barang_id'=>3,'kategori_id'=>3,'barang_kode'=>'BRG03','barang_nama'=>'Chitato','harga_beli'=>8000,'harga_jual'=>10000],
            ['barang_id'=>4,'kategori_id'=>4,'barang_kode'=>'BRG04','barang_nama'=>'Minyak Goreng','harga_beli'=>14000,'harga_jual'=>17000],
            ['barang_id'=>5,'kategori_id'=>5,'barang_kode'=>'BRG05','barang_nama'=>'Sabun Mandi','harga_beli'=>4000,'harga_jual'=>6000],

            ['barang_id'=>6,'kategori_id'=>1,'barang_kode'=>'BRG06','barang_nama'=>'Gula 1kg','harga_beli'=>12000,'harga_jual'=>15000],
            ['barang_id'=>7,'kategori_id'=>2,'barang_kode'=>'BRG07','barang_nama'=>'Kopi Sachet','harga_beli'=>1500,'harga_jual'=>2500],
            ['barang_id'=>8,'kategori_id'=>3,'barang_kode'=>'BRG08','barang_nama'=>'Biskuit','harga_beli'=>7000,'harga_jual'=>9000],
            ['barang_id'=>9,'kategori_id'=>4,'barang_kode'=>'BRG09','barang_nama'=>'Tepung Terigu','harga_beli'=>9000,'harga_jual'=>12000],
            ['barang_id'=>10,'kategori_id'=>5,'barang_kode'=>'BRG10','barang_nama'=>'Shampoo','harga_beli'=>10000,'harga_jual'=>13000],

            ['barang_id'=>11,'kategori_id'=>1,'barang_kode'=>'BRG11','barang_nama'=>'Mie Instan','harga_beli'=>2500,'harga_jual'=>3500],
            ['barang_id'=>12,'kategori_id'=>2,'barang_kode'=>'BRG12','barang_nama'=>'Air Mineral','harga_beli'=>2000,'harga_jual'=>3000],
            ['barang_id'=>13,'kategori_id'=>3,'barang_kode'=>'BRG13','barang_nama'=>'Wafer','harga_beli'=>5000,'harga_jual'=>7000],
            ['barang_id'=>14,'kategori_id'=>4,'barang_kode'=>'BRG14','barang_nama'=>'Telur 1kg','harga_beli'=>22000,'harga_jual'=>26000],
            ['barang_id'=>15,'kategori_id'=>5,'barang_kode'=>'BRG15','barang_nama'=>'Detergen','harga_beli'=>11000,'harga_jual'=>14000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
