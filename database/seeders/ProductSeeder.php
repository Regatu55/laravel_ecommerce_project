<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Products = [
            [
                'name' => 'Shirt',
                'description' => 'Men Shirt',
                'image' => 'assets/images/product/pro1.png',
                'price' => 1200
            ],  

            [
                'name' => 'T-shirt',
                'description' => 'Men T-shirt',
                'image' => 'assets/images/product/pro5.png',
                'price' => 1000
            ], 
            [
              'name' => 'Shirt',
            'description' => 'Men Shirt ',
            'image' => 'assets/images/product/newA1.png',
            'price' => 1500
           ], 
           [
            'name' => 'Trouser',
          'description' => 'Men Trouser',
          'image' => 'assets/images/product/newA2.png',
          'price' => 900
         ],
      
           [
            'name' => 'Shirt',
          'description' => 'Men Shirt',
          'image' => 'assets/images/product/pro29.png',
          'price' => 800
         ],
         [
          'name' => 'Shirt',
        'description' => 'Men Shirt',
        'image' => 'assets/images/product/pro17.png',
        'price' => 600
       ],
       
         [
            'name' => 'Shirt',
          'description' => 'Men Shirt',
          'image' => 'assets/images/product/pro16.png',
          'price' => 850
         ],
        
         [
            'name' => 'Shirt',
          'description' => 'Men Shirt',
          'image' => 'assets/images/product/pro18.png',
          'price' => 1000
         ],
         [
          'name' => 'Shirt',
        'description' => 'Men Shirt',
        'image' => 'assets/images/product/pro22.png',
        'price' => 950
       ],
       [
        'name' => 'Shirt',
      'description' => 'Men Shirt',
      'image' => 'assets/images/product/pro23.png',
      'price' => 1100
     ],
     [
      'name' => 'Shirt',
    'description' => 'Men Shirt',
    'image' => 'assets/images/product/pro19.png',
    'price' => 1050
   ],
   [
    'name' => 'Shirt',
  'description' => 'Men Shirt',
  'image' => 'assets/images/product/pro26.png',
  'price' => 500
 ], 
 [
  'name' => 'Shirt',
'description' => 'Men Shirt',
'image' => 'assets/images/product/pro29.png',
'price' => 500
], 
[
  'name' => 'Shirt',
'description' => 'Men Shirt',
'image' => 'assets/images/product/pro30.png',
'price' => 500
], 
[
  'name' => 'Shirt',
'description' => 'Men Shirt',
'image' => 'assets/images/product/pro13.png',
'price' => 500
], 

[
  'name' => 'T-Shirt',
'description' => ' Men T-Shirt',
'image' => 'assets/images/product/pro11.png',
'price' => 1500
], 
[
  'name' => 'T-Shirt',
'description' => ' Men T-Shirt',
'image' => 'assets/images/product/pro12.png',
'price' => 1200
],

[
  'name' => 'Hody',
'description' => ' Men Hody',
'image' => 'assets/images/product/newA4.png',
'price' => 1200
],

[
  'name' => 'Hody',
'description' => ' Men Hody',
'image' => 'assets/images/product/new5.png',
'price' => 1200
],

   ];

        foreach ($Products as $key => $value){
            Product::create($value);
        }
}
}