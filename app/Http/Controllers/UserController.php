<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $users = User::all();          // data from DB
    return view('users.index', compact('users'));  // pass $users to view
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect('/users')->with('success', 'User Created Successfully!');
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();          // data from DB
    return view('users.create', compact('users'));  // pass $users to view
    }

    /**
     * Store a newly created resource in storage.
     */
  
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
