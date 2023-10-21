<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('penduduk')->truncate();
        \DB::disableQueryLog();
        $csvFile = fopen(base_path("database/csvs/penduduk_wrwb_2021.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                \DB::table('penduduk')->insert([
                    "nik" => $data[0],
                    "nkk" => $data[1],
                    "nama" => $data[2],
                    "jkel_id" => $data[3],
                    "tempat_lahir" => $data[4],
                    "tgl_lahir" => $data[5],
                    "status_kawin_id" => $data[6],
                    "agama_id" => $data[7],
                    "ijasah_id" => $data[8],
                    "pekerjaan_id" => $data[9],
                    "gol_darah_id" => $data[10],
                    "hub_id" => $data[11],
                    "alamat_ktp" => $data[12],
                    "status_warga_id" => $data[13],
                    "warganegara_id" => $data[14],
                    "sls_id" => $data[15],
                    "is_present" => $data[16],
                    "created_by" => $data[17],
                    "created_at" => $data[19],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
