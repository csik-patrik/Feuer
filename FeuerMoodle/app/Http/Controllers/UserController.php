<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('role_name')->get();
        return view('users.create', compact('roles'));
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
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'lastname'  => 'required',
            'firstname' => 'required',
            'email' => 'required'
        ]);
        User::insert(
            [
                'username' => $request['username'],
                'password' => $request['password'],
                'role_id' => $request['role_id']
            ]
        );
        UserData::insert(
            [
                'user_id' => DB::table('users')->orderBy('user_id', 'desc')->first()->user_id,
                'email' => $request['email'],
                'firstname' => $request['firstname'],
                'lastname'  => $request['lastname'],
                'midname' => $request['midname'],
                'email' => $request['email'],
                'phone' => $request['phone']
            ]
        );
        return redirect()->route('users.index')
            ->with('success', 'Felhasználó hozzáadása sikeres!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('role_name')->get();
        return view('users.edit', compact('user', 'roles'));
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
            'role_id' => 'required',
            'lastname'  => 'required',
            'firstname' => 'required',
            'email' => 'required'
        ]);
        $userMainData = array(
            'username' => $request->username,
            'password' => $request->password,
            'role_id' => $request->role_id
        );
        $user->update($userMainData);
        DB::table('user_data')->where('user_id', '=', $user->user_id)
            ->update(
                ['email' => $request->email],
                ['lastname' => $request->lastname],
                ['firstname' => $request->firstname],
                ['midname' => $request->midname],
                ['phone' => $request->phone]
            );
        return redirect()->route('users.index')
            ->with('success', 'Felhasználó módosítása sikeres!');
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
            ->with('success', 'A felhasználó törlése sikeres!');
    }
}
