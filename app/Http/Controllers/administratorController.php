<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class administratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('admin.dashboard_admin', [
            'nama_dashboard' => 'Data Pelanggan Pengguna'
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.data_user',[
            'nama_dashboard' => 'Data User Pengguna'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        ddd($request);
        $validaasi = $request->validate([

            'name' => 'required|unique:Users',
            // 'email' => 'required|email:rfc,dns|unique:Users',
            'email' => 'required|unique:Users',
            'password' => 'required|min:5', 
            'level' => 'required',


            //insert Data
            
        ]);
         // for Debug
        // var_dump($validaasi);
        // die();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;

        $user->save();

        return redirect('/tambahUser')->with(['success' => 'Data telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $administrator)
    {
        //
    }
}
