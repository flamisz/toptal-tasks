<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Events\ImportChunkReady;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImportBill implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $rows = collect(range(1, 1000));

        $chunks = collect($rows)->chunk(100);

        foreach ($chunks as $key => $chunk) {
            $chunk->each(function ($row) {
                usleep(3000);
            });

            event(new ImportChunkReady($key));
        }
    }
}
