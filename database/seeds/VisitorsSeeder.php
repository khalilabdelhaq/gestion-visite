<?php

use Illuminate\Database\Seeder;

class VisitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->insert([

            'nom' => 'خليل',
            'prenom' => 'عبد الحق',
            'cin' => 'bb6765',
            'service' => "DAR",
        ]);
    }
}
