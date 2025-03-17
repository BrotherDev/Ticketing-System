<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExportableProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         $types = [
            'Shirts', 'Pants', 'T-Shirts', 'Polo Shirts', 'Hoodie', 'Trouser','Mens Denim Pant', 'Short Pant', 'Ledies Pant',
            'Jacket', 'Coverall', 'Jacket Vest', 'Sleep Boxer', 'Sweet Shirts', 'Tank Top','Bottom', 'Down Padding Jacket', 'Skirts',
            'All kind of Tops', 'Payjama', 'Long Pant', 'Ladies Shirts', 'Denim and non denim bottom', 'Synthetic jackets with fake down and padded jacket','Chino shorts', 'Cargo shorts', 'Ledies Pant',
            'Fleece Shirts', 'Polar Fleece', 'Leggings', 'Denim Pants', 'Sports & Casual Wear', 'Windbreakers','Babies Trousers', 'Blouses', 'Bikini Briefs',
            'Kids Overall', 'Underwears', 'Bra', 'Children Wears', 'Padding Jackets', 'Single Jersey','Uniforms', 'Infants Wears', 'Fashion Wears',
            'Others',

         ];

         foreach ($types as $type) {
             DB::table('exportable_products')->insert([
                 'exportable_product_name' => $type,
                 'created_at' => now(),
                 'updated_at' => now(),
             ]);
         }
     }
}
