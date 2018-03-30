<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentsController extends Controller
{
    public function index($viewName = '')
    {
        return view('components.' . $viewName);
    }
}
