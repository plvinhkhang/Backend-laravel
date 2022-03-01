<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
    			'id_type'=>'1',
    			'name'=>'Đồ Caro Croptop Cột Nơ',
    			'gia'=>120,
    			'soluong'=>170,
    			'mau'=>'Kẻ caro',
    			'size'=>'17-20kg',
    			'img'=>'',
    			'mota'=>'',
    			'noibat'=>'1',
    			'status'=>'1'
    		]

    	];
        DB::table('vp_products')->insert($data);
    }
}
