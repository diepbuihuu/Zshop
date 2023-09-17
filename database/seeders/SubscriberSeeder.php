<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use App\Models\Subscriber;
use Database\Factories\ContactedUsFactory;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Subscriber::count() == 0) {
            Subscriber::factory(1000)->create();
        }
    }
}
