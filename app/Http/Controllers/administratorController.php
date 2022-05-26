<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Administrator;
use Illuminate\Support\Facades\DB;
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
        
        // return view('admin.dashboard_admin', [
        //     'nama_dashboard' => 'Data Pelanggan Pengguna'
        // ]);

        $admin = Administrator::all();
        // $admins = $admin->except('administrator');
        return view('admin.dashboard_admin', compact('admin'),[
            'nama_dashboard' => 'Data User Admin']);
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
        // Check Storage pada File Laravel 
        // return $request->file('image')->store('post-image');
        // ddd($request); 


        $validaasi = $request->validate([

            'name' => 'required|unique:Users',
            // 'email' => 'required|email:rfc,dns|unique:Users',
            'email' => 'required|unique:Users',
            'password' => 'required|min:5', 
            'image' => 'image|file|max:1024',
            'level' => 'required',


            //insert Data
            
        ]);
    $image = $request->file('image');
	$nama_image = time()."_".$image->getClientOriginalName();
	$tujuan_upload = 'data_file';
	$image->move($tujuan_upload,$nama_image);
      	// isi dengan nama folder tempat kemana image diupload
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
        //     $image->move($destinationPath, $profileImage);
        //     // $input['image'] = "$profileImage";
        // }

        

        // if ($request->img) {
        //     $file = $request->File('img');
        //     $ext  = $user->username . "." . $file->clientExtension();
        //     $file->storeAs('images/', $ext);
        //     $user->image_name = $ext;
        // }

        // if($request->file('image')){
        //     $validaasi['image'] = $request->file('image')->store('post-image');
        // }
         // for Debug
        // var_dump($validaasi);
        // die();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image = $nama_image;
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
        // ddd($administrator);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view ('admin.user_update');

        // check Untuk Debug
        // return Administrator::find($id);
      
        // $admin = Administrator::all();
        // $admins = $admin->except('administrator');
        return view('admin.user_update',[
            'nama_dashboard' => 'Data User Admin',
            'admin' => Administrator::find($id)
        ]);
        // return view('admin.user_update',[
        //     'nama_dashboard' => 'Data User Admin',
        //     'admin' => Administrator::find($id),
        // ]);
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
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        // User::destroy($administrator->id);
        return redirect('/tambahUser')->with(['success' => 'Data telah Dihapus']);
    }
}
