<?php

namespace App\Jobs;

use App\Helpers\SetActivityStatus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FinishActivityJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $plate;
    /**
     * Create a new job instance.
     */
    public function __construct($plate)
    {
        $this->plate = $plate;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        SetActivityStatus::finished($this->plate);
    }
}
