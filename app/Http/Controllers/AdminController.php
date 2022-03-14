<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }

    public function showDashboard() {
        return view('admin.dashboard');
    }

    public function admin_dashboard(Request $request){
        $email = $request->admin_email;
        $password = md5($request->admin_password);

        $real_account = AdminModel::where('admin_email', $email)->where('admin_password', $password)->first();
        if($real_account){
            return view('admin_layout')->with('real_account', $real_account);
        }

    }
}
