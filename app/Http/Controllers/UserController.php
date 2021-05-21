<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $users = User::all();
        return Inertia::render('admin/users/Index', ['users' => $users]);
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|max:255',
            'birth' => 'required|date',
            'password' => 'required',
        ]);


    $user = new User();
    $user->name = $validatedData['name'];
    $user->address = $validatedData['address'];
    $user->phone = $validatedData['phone'];
    $user->email = $validatedData['email'];
    $user->birth = $validatedData['birth'];
    $user->password = Hash::make($validatedData['password']);

    $user->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function edit($id)
    {
        $userEdit = User::find($id);

        return Inertia::render('admin/users/Edit', ['userData' => $userEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'birth' => 'required',
            'admin' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);

        $user->name = $validatedData['name'];
        $user ->address = $validatedData['address'];
        $user->phone = $validatedData['email'];
        $user->email = $validatedData['phone'];
        $user->birth = $validatedData['birth'];
        $user->admin = $validatedData['admin'];

        if($user->password != Hash::make($request->password) && $request->admin != '')
        {
            $user->password == Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

    }
}
