<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\SessionsHome;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $challenge = Challenge::all();
        $session = SessionsHome::all();
        return Inertia::render('admin/challenges/Index', ["challenges" => $challenge, "sessions" => $session]);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        Challenge::create(
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'points' => 'required|integer',
                'session_id' => 'required|integer'
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
        $challengeData = Challenge::find($id);
        $session = SessionsHome::all();
        return Inertia::render('admin/challenges/Edit', ['challengeData' => $challengeData, 'sessions' => $session]);
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
        $challenge = Challenge::find($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'points' => 'required|integer',
            'session_id' => 'required'
        ]);

        $challenge->title = $validatedData['title'];
        $challenge->description = $validatedData['description'];
        $challenge->points = $validatedData['points'];
        $challenge->session_id = $validatedData['session_id'];

        $challenge->save();

        return redirect()->route('challenges.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $challenge = Challenge::find($id);
        $challenge->delete();
        return redirect()->route('challenges.index');
    }
}
