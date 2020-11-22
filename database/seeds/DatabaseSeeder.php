<?php

use Illuminate\Database\Seeder;
use App\models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'banh mi',
                'description' => 'banh mi 20k 1 cai',
            ]
        );

        Product::create(
            [
                'name' => 'pho',
                'description' => 'pho bo',
            ]
        );

        Product::create(
            [
                'name' => 'bun',
                'description' => 'bun cha',
            ]
        );
    }
}
