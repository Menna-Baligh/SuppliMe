<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Discount::create([
            'discount_percentage' => 15.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 1,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(7)
        ]);
        Discount::create([
            'discount_percentage' => 10.00 ,
            'discount_type' => 'product',
            'is_daily' => true,
            'product_id' => 50,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(1)
        ]);
        Discount::create([
            'discount_percentage' => 20.00,
                'discount_type' => 'category',
                'is_daily' => false,
                'product_id' => null,
                'category_id' => 7,
                'start_date' => now(),
                'end_date' => now()->addDays(30),
        ]);
        Discount::create([
                'discount_percentage' => 10.00,
                'discount_type' => 'category',
                'is_daily' => false,
                'product_id' => null,
                'category_id' => 8,
                'start_date' => now(),
                'end_date' => now()->addDays(30),
        ]);
        Discount::create([
            'discount_percentage' => 5.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 4,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 10.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 17,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 5.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 9,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 20.00 ,
            'discount_type' => 'product',
            'is_daily' => true,
            'product_id' => 44,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(1)
        ]);
        Discount::create([
            'discount_percentage' => 30.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 49,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 20.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 33,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 40.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 29,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 15.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 20,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 20.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 37,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
        Discount::create([
            'discount_percentage' => 20.00 ,
            'discount_type' => 'product',
            'is_daily' => false,
            'product_id' => 42,
            'category_id' => null,
            'start_date' => now(),
            'end_date' => now()->addDays(60)
        ]);
    }
}
