<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Month;
use Carbon\Carbon;

class MonthSeeder extends Seeder
{
    public function run()
    {
        setlocale(LC_TIME, 'pt_BR.UTF-8'); // Definindo o locale para português do Brasil

        $date = Carbon::create(2024, 1, 1); // Começando do primeiro dia do ano
        $months = [];

        for ($i = 0; $i < 366; $i++) {
            $months[] = [
                'week_day' => utf8_encode(strftime('%A', $date->timestamp)),
                'number_day' => $date->day,
                'month' => utf8_encode(strftime('%B', $date->timestamp)),
                'number_month' => $date->month,
                'year' => $date->year,
            ];

            $date->addDay();
        }

        Month::insert($months);
    }
}
