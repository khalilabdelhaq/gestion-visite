<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         DB::table('visitors')->insert([

            'nom' => 'خليل',
            'prenom' => 'عبد الحق',
            'cin' => 'bb6765',
            'service' => 'DAR',
        ]);
    }
}
