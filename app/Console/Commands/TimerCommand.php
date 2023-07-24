<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TimerCountdown;

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
        $timerCountdowns = TimerCountdown::where('is_play', true)->get();
        foreach ($timerCountdowns as $timerCountdown) {
            if($timerCountdown->is_countdown == true && $timerCountdown->time > 0) {
                $timerCountdown->update([
                    'time' => $timerCountdown->time -= 1
                ]);
            } elseif($timerCountdown->is_countdown == false) {
                $timerCountdown->update([
                    'time' => $timerCountdown->time += 1
                ]);
            } else {
                $timerCountdown->update([
                    'is_play' => false
                ]);
            }
        }

        // info('timer is running');
        return Command::SUCCESS;
    }
}
