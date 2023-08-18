<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Channel;
use Faker\Factory as Faker;

class channelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) {
        $channelName = $faker->unique()->company;
        
        Channel::create([
            'channel_name' => $channelName,
            'description' => $faker->sentence,
            'subscribers_count' => $faker->numberBetween(1000, 1000000),
            'url' => $faker->url,
            ]);
        }
}
}