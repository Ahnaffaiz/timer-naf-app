<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TimerCountdown;

class TimerCountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10; $i++) { 
            TimerCountdown::updateOrInsert(
                ['id' => $i],
                [
                    'is_play'=> 0,
                    'time'=> 0,
                    'duration'=> 0,
                    'is_countdown'=> 0,
                ]
            );
        }
    }
}
