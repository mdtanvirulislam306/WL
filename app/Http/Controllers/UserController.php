<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    // custom function
    public function profileEdit()   
    {
        
       //dd(Auth::user()->image);
        return view('Pages.Profile.profileEdit');
    }
    public function profileUpdate(Request $req)
    {
        $req->validate([
            "name" => 'required|string',
            "phone" => 'required|numeric|min:11',
            "password" => 'required|min:8',
            "image" => 'image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);

            $id = Auth::id();
            $user = User::find($id);
            $user->name = $req->name;
            $user->email = $req->email;
            $user->number = $req->phone;
            $user->password = Hash::make($req->password);

            if($req->file('image')){
                $name = now()->timestamp.".{$req->image->getClientOriginalName()}";
                //unlink($user->image);
                $path = $req->file('image')->storeAs('user_images', $name, 'public');
                $user->image = "/storage/{$path}";
            }
           
            
            if($user->save()){
                return redirect()->back()->with('message','Profile Updated!');
            }else{
                return redirect()->back()->with('message','Something is wrong!');
            }
           
    }
}
