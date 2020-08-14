<?php

use Illuminate\Database\Seeder;
use App\BitcoinChart;

class BitcoinChartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BitcoinChart::class, 30)->create();
    }
}
