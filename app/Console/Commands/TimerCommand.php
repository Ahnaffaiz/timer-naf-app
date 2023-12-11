<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TimerCountdown;
use Illuminate\Support\Facades\Redis;

class TimerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'timer-run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $numberOfTimers = 10;

        // Update timers (this can be within a loop or based on your application logic)
        foreach (range(1, $numberOfTimers) as $i) {
            $timerKey = 'timer:' . $i;
            if (!Redis::exists($timerKey) ) continue;
            $isPlay = Redis::hget($timerKey, 'is_play');
            if (!$isPlay) continue;

            $isCountdown = Redis::hget($timerKey, 'is_countdown');
            if ($isCountdown) {
                Redis::hincrby($timerKey, 'time', -1); // Decrement time by 1 for each timer
            } else {
                Redis::hincrby($timerKey, 'time', 1); // Increment time by 1 for each timer
            }

            // Check if timer is stopped
            $currentValue = Redis::hget($timerKey, 'time');
            if ($currentValue <= 0) {
                Redis::hset($timerKey, 'is_play', false); // Set is_play to false when timer reaches 0 or less
            }
        }

        // info('timer is running');
        return Command::SUCCESS;
    }
}
