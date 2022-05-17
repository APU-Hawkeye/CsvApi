<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Countries;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Countries::truncate();

        $csvFile = fopen(public_path('data/02-Countries.csv'), 'r');
        $now = Carbon::now();
        $transRow  = true;
        while (($data = fgetcsv($csvFile, 5000, ',')) !== false) {
            if (!$transRow) {
                Countries::create([
                    'continent_code' => $data[0],
                    'currency_code' => $data[1] ?? null,
                    'iso2_code' => mb_strtoupper(trim($data[2])),
                    'iso3_code' => mb_strtoupper(trim($data[3])),
                    'iso_numeric_code' => $data[4] ?: null,
                    'fips_code' => mb_strtoupper(trim($data[5])) ?: null,
                    'calling_code' => $data[6] ?: null,
                    'common_name' => trim($data[7]),
                    'official_name' => trim($data[8]),
                    'endonym' => trim($data[9]),
                    'demonym' => trim($data[10]),
                    'created' => $now,
                ]);
            }
            $transRow = false;
        }
        fclose($csvFile);
    }
}
