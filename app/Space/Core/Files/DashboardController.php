<?php
namespace Ahorro\Http\Controllers;

use Illuminate\Http\Request;
use Ahorro\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.basic');
    }
}
