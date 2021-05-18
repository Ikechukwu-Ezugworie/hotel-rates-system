<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("hotels")->insert([
            'name'=>'Transcorp Hilton',
            'stars'=>3,
            'address'=>'Maitama Abuja Nigeria',
        ]);

    }
}
