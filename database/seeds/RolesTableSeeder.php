<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['name'=>'Administrator','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'Author','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'Subscribe','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
        ]);
    }
}
