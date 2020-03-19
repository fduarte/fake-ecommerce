<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(base_path() . '/database/seeds/csv/products.csv', 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $product) {
            DB::table('products')->insert($product);
        }
    }
}
