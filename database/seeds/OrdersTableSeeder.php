<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use \Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(base_path() . '/database/seeds/csv/orders.csv', 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $order) {

            $order['ship_charged_cents'] = $order['ship_charged_cents'] === 'NULL' ? NULL : $order['ship_charged_cents'];
            $order['ship_cost_cents'] = $order['ship_cost_cents'] === 'NULL' ? NULL : $order['ship_cost_cents'];

            DB::table('orders')->insert($order);

        }
    }
}
