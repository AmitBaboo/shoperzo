<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        session()->flash('success', 'Loged in Successfuly, Welcome to the Dashboard!');
        return view ('admin.dashboard');
        //$admin = Auth::guard('admin')->user();
        //echo "welcome  ".$admin->name. '<a href="'.route('admin.logout').'" > logout</a>';
    }

    
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
