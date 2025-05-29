<?php

namespace App\Http\Controllers;

use FFMpeg\FFMpeg;
use Illuminate\Http\Request;

class FFmpegTestController extends Controller
{
    public function test()
    {
        try {
            FFMpeg::create([
                'ffmpeg.binaries'  => '/var/www/bin/ffmpeg/ffmpeg',
                'ffprobe.binaries' => '/var/www/bin/ffmpeg/ffprobe',
            ]);

            return 'FFmpeg initialized';
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Could not initialize FFmpeg',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}
