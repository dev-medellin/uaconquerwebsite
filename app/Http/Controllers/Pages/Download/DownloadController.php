<?php

namespace App\Http\Controllers\Pages\Download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function index(){
        return view('download.index');
    }
}
