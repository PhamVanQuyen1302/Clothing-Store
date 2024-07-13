<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    private string $fodel = "admin.";
    public function index()
    {
        return view($this->fodel . __FUNCTION__);
    }
}
