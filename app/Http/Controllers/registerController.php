<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        
        $validaasi = $request->validate([

            'name' => 'required|unique:Users',
            // 'email' => 'required|email:rfc,dns|unique:Users',
            'email' => 'required|unique:Users',
            'password' => 'required|min:5',
            'is_admin' => 'required',


            //insert Data
            
        ]);

        // for Debug
        // var_dump($validaasi);
        // die();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;

        $user->save();

        return redirect('/login')->with(['success' => 'Data telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
