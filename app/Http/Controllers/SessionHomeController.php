<?php

namespace App\Http\Controllers;

use App\Models\SessionsHome;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SessionHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $sessions = SessionsHome::all();
        $user = User::find(Auth::id());

        return Inertia::render('admin/sessions/Index', ['sessions' => $sessions, 'user' => $user]);
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

        SessionsHome::create(
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'start' => 'required',
                'end' => 'required'
            ])
        );

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
        $sessionEdit = SessionsHome::find($id);

        return Inertia::render('admin/sessions/Edit', ['sessionData' => $sessionEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $session = SessionsHome::find($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);

        $session->title = $validatedData['title'];
        $session->description = $validatedData['description'];
        $session->start = $validatedData['start'];
        $session->end = $validatedData['end'];
        $session->save();
        return redirect()->route('sessions.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessionDelete = SessionsHome::find($id);

        $sessionDelete->delete();
    }
}
