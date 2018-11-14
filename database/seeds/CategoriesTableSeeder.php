<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name'=>'PHP','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'JAVA','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'GIT','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'HTML5','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'CSS','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'C#','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'PYTHON','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
        ]);
    }
}
