<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampleData = [
            [
                'product_name' => 'book', 
                'product_description' => 'W3c', 
                'product_price' => '1000.00', 
                'quantity' => 1
            ],
            [
                'product_name' => 'magazine', 
                'product_description' => 'PHP', 
                'product_price' => '2000.00', 
                'quantity' => 1
            ],
            [
                'product_name' => 'journals', 
                'product_description' => 'Laravel', 
                'product_price' => '5000.00', 
                'quantity' => 1
            ]
        ];
        
        foreach($sampleData as $data){
            Products::create($data);
        }
    }
}
