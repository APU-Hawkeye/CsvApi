<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Currencies;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currencies::truncate();

        $csvFile = fopen(public_path('data/01-Currencies.csv'), 'r');
        $now = Carbon::now();
        $transRow  = true;
        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (!$transRow) {
                Currencies::create([
                    'iso_code' => trim($data[0]),
                    'iso_numeric_code' => trim($data[1]) ?? null,
                    'common_name' => trim($data[2]),
                    'official_name' => trim($data[3]),
                    'symbol' => trim($data[4]),
                    'created' => $now,
                ]);
            }
            $transRow = false;
        }
        fclose($csvFile);
    }
}
