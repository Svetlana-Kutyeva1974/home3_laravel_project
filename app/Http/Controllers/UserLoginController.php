<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $user = Auth::user();
            return view('user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        UserIn::create([
          'name' => Str::random(16).'user',
          'email' => Hash::make('секрет').'@gmail.ru',
          'password' => Hash::make('секрет'),
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ]);
        return redirect()->back();
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
     * @param  \App\Models\UserIn  $userIn
     * @return \Illuminate\Http\Response
     */
    public function show(UserIn $userIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserIn  $userIn
     * @return \Illuminate\Http\Response
     */
    public function edit(UserIn $userIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserIn  $userIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserIn $userIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserIn  $userIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserIn $userIn)
    {
        //
    }
}
