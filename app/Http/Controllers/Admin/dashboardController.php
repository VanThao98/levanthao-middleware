<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function __construct()
    {
        // return 'khởi động dashboard';
        echo 'khởi động';
    }
    public function index(){
        return "<h2> dashboard <h/2>";
    }
}
