<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('role_id', 'desc')->get();
    
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'roleId' => 'required',
        ]);
    
        //User::create($request->all());
        // date_default_timezone_set("Europe/Budapest");
        User::insert(
            [
            'user_id' => $request['id'],
            'username' => $request['username'],
            'password' => $request['password'],
            'role_id' => $request['roleId'],
            // 'created_at' => date("Y-m-d h:i:sa")
            ]
        );
        // $request['id'], $request['code'], $request['name'], $request['category_id'], $request['owner_id']
        return redirect()->route('users.index')
                        ->with('Sikeres hozzáadás','Felhasználó hozzáadása sikeres!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'roleId' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('Sikeres módosítás','Felhasználó módosítása sikeres!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('Sikeres törlés!','A felhasználó törlése sikeres!');
    }
}
