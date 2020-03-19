<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(base_path() . '/database/seeds/csv/users.csv', 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $user) {
            DB::table('users')->insert($user);
        }
    }
}
