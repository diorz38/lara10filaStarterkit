<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('wilayah_bps')->truncate();
        \DB::disableQueryLog();
        $csvFile = fopen(base_path("database/csvs/mastere_bs_2020_1.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                \DB::table('wilayah_bps')->insert([
                    "id" => $data['0'],
                    "parent_id" => $data['1'],
                    "name" => $data['2'],
                    "kode" => $data['3'],
                    "length" => $data['4'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
