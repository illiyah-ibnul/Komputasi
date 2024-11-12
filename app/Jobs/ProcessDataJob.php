<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $dataChunk;

    public function __construct($dataChunk)
    {
        $this->dataChunk = $dataChunk;
    }

    
    public function handle()
    {
        // Tambahkan logika pemrosesan data di sini
        foreach ($this->dataChunk as $data) {
            // Contoh proses setiap item dalam chunk
            Log::info("Memproses Item: " . $data);
            // Tambahkan logika lain sesuai kebutuhan
        }
    }
}
