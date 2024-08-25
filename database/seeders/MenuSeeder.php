<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oMenu = new menu();
        $oMenu->nombreMenu = 'Americano';
        $oMenu->precio = '10000';
        $oMenu->save();

        $oMenu2 = new menu();
        $oMenu2->nombreMenu = 'Tico';
        $oMenu2->precio = '7500';
        $oMenu2->save();

        $oMenu3 = new menu();
        $oMenu3->nombreMenu = 'Mexicano';
        $oMenu3->precio = '9000';
        $oMenu3->save();
    }
}
