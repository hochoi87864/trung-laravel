<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggingController extends Controller
{
    public function index()
    {
        Log::emergency("AAAAA");
        Log::alert("AAAAA");
        Log::critical("AAAAA");
        Log::error("AAAAA");
        Log::warning("AAAAA");
        Log::notice("AAAAA");
        Log::info("AAAAA");
        Log::debug("AAAAA");
        dump("AAAA");
    }
}
