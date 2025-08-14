<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
          ['name' => 'Samsung'],
          ['name' => 'OppO'],
          ['name' => 'Vivo'],
          ['name' => 'Realme'],
          ['name'=> 'Iphone'],
          ['name'=> 'Sony'],
          ['name'=> 'Asus'],
          ['name'=> 'Poco'],
          ['name'=> 'Lenovo'],
          ['name'=> 'Xavomi'],
          ['name'=> 'Nothing'],
        ];
        foreach($brands as $brand){
            Brand::create($brand);
        }
        
    }
}
