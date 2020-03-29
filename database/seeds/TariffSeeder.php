<?php

use App\Tariff;
use Illuminate\Database\Seeder;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tariff =[];
        $tariff[0] = new Tariff([
            'months'=>1,
            'price'=>50,
            'addOnMember'=>20
        ]);
        $tariff[1] = new Tariff([
            'months'=>3,
            'price'=>150,
            'addOnMember'=>60
        ]);

        $tariff[2] = new Tariff([
            'months'=>6,
            'price'=>250,
            'addOnMember'=>100
        ]);

        $tariff[3] = new Tariff([
            'months'=>12,
            'price'=>500,
            'addOnMember'=>200
        ]);

        foreach ($tariff as $t){
            $t->save();
        }
    }
}
