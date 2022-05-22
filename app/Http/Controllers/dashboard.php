<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_dashboard',[
            'nama_dashboard' => 'Dashboard',
        ]);
    }
    
    public function store(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
