<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Administrator;

class dashboard extends Controller
{
    //
    public function index()
    {
        $admin = Administrator::all();
        // $admins = $admin->except('administrator');
        return view('admin.admin_dashboard', compact('admin'),[
            'nama_dashboard' => 'Data User Admin']);
        // return view('admin.admin_dashboard',[
        //     'nama_dashboard' => 'Dashboard',
        //     'admin'  => Administrator::all(),
        // ]);
    }
    
    public function store(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
