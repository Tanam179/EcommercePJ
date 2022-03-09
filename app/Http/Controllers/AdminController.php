<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\AdminModel;

class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }

    public function showDashboard() {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){

    }
}
