<?php

use Illuminate\Database\Seeder;
// use Maatwebsite\Excel\Facades\Excel;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Makanan::insert([
        	['nama' => 'Nasi Putih', 'karbohidrat' => 39.8, 'protein' => 3, 'lemak' => 0.006],
        ]);
    }
}
