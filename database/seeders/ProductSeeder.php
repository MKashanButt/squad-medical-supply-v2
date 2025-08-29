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
        Product::insert([
            [
                "thumbnail" => "images/wheelchairs.avif",
                "name" => "Wheelchairs",
                "key_benefits" => "Provides support for injured or weak knees, Reduces knee strain during physical activities, Helps alleviate knee pain and inflammation",
                "description" =>
                "Discover our range of comfortable and durable wheelchairs, designed for ease of use and enhanced mobility. Choose the perfect model to fit your lifestyle and needs.",
                'tags' => '',
            ],
            [
                "thumbnail" => "images/cgm-monitors.avif",
                "name" => "CGM Monitors",
                'key_benefits' => "Provides support for injured or weak knees, Reduces knee strain during physical activities, Helps alleviate knee pain and inflammation",
                "description" =>
                "Stay on top of your health with our continuous glucose monitors, providing real-time blood sugar data for optimal diabetes management. Easy to use and highly accurate.",
                'tags' => '',
            ],
            [
                'thumbnail' => 'images/knee-braces.avif',
                'name' => 'Knee Braces',
                'key_benefits' => "Provides support for injured or weak knees, Reduces knee strain during physical activities, Helps alleviate knee pain and inflammation",
                'description' =>
                'Support and stabilize your joints with our high-quality braces, designed for maximum comfort and effectiveness. Ideal for injury recovery and daily use.',
                'tags' => '',
            ],
            [
                'thumbnail' => 'images/hip-braces.avif',
                'name' => 'Hip Braces',
                'key_benefits' => "Provides support for injured or weak knees, Reduces knee strain during physical activities, Helps alleviate knee pain and inflammation",
                'description' =>
                'Support and stabilize your joints with our high-quality braces, designed for maximum comfort and effectiveness. Ideal for injury recovery and daily use.',
                'tags' => '',
            ],
        ]);
    }
}
