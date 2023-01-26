<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        try {
            // $user = new User;
            // $user->name = $req->name;
            // $user->email = $req->email;
            // $user->number = $req->phone;
            // $user->password = $req->name;
            // $user->name = $req->name;

            $id = Auth::id();
            $user = User::find($id);
            //dd($user);
            $user->name = $req->name;
            $user->email = $req->email;
            $user->number = $req->phone;
            $user->password = Hash::make($req->password);
            $name = now()->timestamp.".{$req->image->getClientOriginalName()}";
            $path = $req->file('image')->storeAs('images', $name, 'public');
            $user->image = "/storage/{$path}";
            //dd($user);
            $user->save();
            return redirect()->back()->with('success','Profile Updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something is wrong!');
        }
        
    }
}
