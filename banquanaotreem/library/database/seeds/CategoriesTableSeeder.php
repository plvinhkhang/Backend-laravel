<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
    		[
    			'name'=>'Đồ Bộ Bé Gái',
    			'slug'=>str_slug('Đồ Bộ Bé Gái')
    		],
    		[
    			'name'=>'Váy Đầm Bé Gái',
    			'slug'=>str_slug('Váy Đầm Bé Gái')
    		],
    		[
    			'name'=>'Áo Bé Gái',
    			'slug'=>str_slug('Áo Bé Gái')
    		],
    		[
    			'name'=>'Đồ Bộ Bé Trai',
    			'slug'=>str_slug('Đồ Bộ Bé Trai')
    		],
    		[
    			'name'=>'Quần Bé Trai',
    			'slug'=>str_slug('Quần Bé Trai')
    		],
    		[
    			'name'=>'Áo Bé Trai',
    			'slug'=>str_slug('Áo Bé Trai')
    		]
    	];
        DB::table('vp_categories')->insert($data);
    }
}
