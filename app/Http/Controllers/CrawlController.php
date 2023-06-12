<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrawlController extends Controller
{
    public function index()
    {
        Storage::append("crawl/movie.json", json_encode(["name" => "Titanic"]));
        return "";
    }
}
