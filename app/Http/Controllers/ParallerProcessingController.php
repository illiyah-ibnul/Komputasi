<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessDataJob;
use Illuminate\Http\Request;

class ParallerProcessingController extends Controller
{
    public function processLargeTask()
    {
        $dataChunks = $this->splitDataIntoChunks(range(1,100));

        foreach ($dataChunks as $chunk){
            ProcessDataJob::dispatch($chunk);
        }
        return response()->json(['message' =>'Job diproses decara paralel']);
    }
private function splitDataIntoChunks($data, $chunkSize = 10)
{
    return array_chunk($data, $chunkSize);
}
}
