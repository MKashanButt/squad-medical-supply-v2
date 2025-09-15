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
                "key_benefits" => "Enables mobility for individuals with limited movement,Manual or powered options available,Designed for comfort and ease of use",
                "description" =>
                "Discover our range of comfortable and durable wheelchairs, designed for ease of use and enhanced mobility. Choose the perfect model to fit your lifestyle and needs.",
                'tags' => json_encode(["mobility", "support", "wheelchair"]),
            ],
            [
                "thumbnail" => "images/cgm-monitors.avif",
                "name" => "CGM Monitors",
                'key_benefits' => "Continuous glucose monitoring,Tracks blood sugar levels in real-time,Sends alerts for high or low readings",
                "description" =>
                "Stay on top of your health with our continuous glucose monitors, providing real-time blood sugar data for optimal diabetes management. Easy to use and highly accurate.",
                'tags' => json_encode(["glucose", "monitoring", "health"]),
            ],
            [
                'thumbnail' => 'images/knee-braces.avif',
                'name' => 'Knee Braces',
                'key_benefits' => "Provides support for injured or weak knees, Reduces knee strain during physical activities, Helps alleviate knee pain and inflammation",
                'description' =>
                'Support and stabilize your joints with our high-quality braces, designed for maximum comfort and effectiveness. Ideal for injury recovery and daily use.',
                'tags' => json_encode(["support", "knee", "brace"]),
            ],
            [
                'thumbnail' => 'images/hip-braces.avif',
                'name' => 'Hip Braces',
                'key_benefits' => "Supports the hip joint,Ideal for post-surgery recovery,Reduces hip strain during movement",
                'description' =>
                'Support and stabilize your joints with our high-quality braces, designed for maximum comfort and effectiveness. Ideal for injury recovery and daily use.',
                'tags' => json_encode(["support", "hip", "brace"]),
            ],
            [
                'thumbnail' => 'images/back-braces.avif',
                'name' => 'Back Braces',
                'key_benefits' => "Elastic sleeve for joint support,Improves circulation,Ideal for compression therapy",
                'description' =>
                'Relieve back pain and improve posture with our supportive back braces. Designed to provide compression, stability, and comfort for daily wear or injury recovery.',
                'tags' => json_encode(["support", "back", "brace", "posture"]),
            ],
            [
                "thumbnail" => 'images/uvb-light-wands.avif',
                "name" => "UVB Light Wands",
                "key_benefits" => "Portable UVB therapy for skin conditions,Effective for psoriasis treatment,Delivers controlled UVB exposure",
                "description" =>
                "Treat skin conditions effectively with portable UVB light wands. Perfect for psoriasis and other skin therapies, offering safe, targeted UVB exposure at home.",
                "tags" => json_encode(["therapy", "UVB", "psoriasis", "skin treatment"]),
            ],
            [
                "thumbnail" => "images/tens-unit.avif",
                "name" => "TENS Unit",
                "key_benefits" => "Transcutaneous Electrical Nerve Stimulation device,Helps relieve pain through electric pulses,Portable and easy to use",
                "description" =>
                "Experience drug-free pain relief with our TENS units, delivering gentle electrical stimulation to soothe sore muscles and nerves. Compact, portable, and easy to use anytime.",
                "tags" => json_encode(["pain relief", "TENS", "therapy", "muscle"]),
            ],
            [
                "thumbnail" => "images/lymphedema-pump-massagers.avif",
                "name" => "Lymphedema Pump Massagers",
                "key_benefits" => "Promotes lymphatic drainage,Reduces swelling and improves circulation,Adjustable pressure levels",
                "description" =>
                "Improve circulation and reduce swelling with lymphedema pump massagers. Designed to promote lymphatic drainage and provide adjustable comfort for effective therapy.",
                "tags" => json_encode(["therapy", "lymphedema", "circulation", "massage"]),
            ],

        ]);
    }
}
