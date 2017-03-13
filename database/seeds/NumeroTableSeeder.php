<?php

use Illuminate\Database\Seeder;


class NumeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++)
        {
            DB::table('numeros')->insert(array(
               'number' => $i
            ));
        }
    }
}
