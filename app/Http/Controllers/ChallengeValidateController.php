<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\CompletedChallenge;
use App\Models\Picture;
use App\Models\SessionsHome;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ChallengeValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $pictures = Picture::all();
        return Inertia::render('admin/challengesValidate/Index', ["pictures" => $pictures]);

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
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function show($idUser, $idSession, $idChallenge)
    {
        $session = SessionsHome::find($idSession);
        $challenge = Challenge::find($idChallenge);
        $user = User::find($idUser);
        $picture = Picture::where('session_id', $idSession)->where('challenge_id', $idChallenge)->where('user_id', $idUser)->get();
        return Inertia::render('admin/challengesValidate/Show', ["session" => $session, "challenge" => $challenge, "user" => $user, "picture" => $picture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateVerified($idUser, $idSession, $idChallenge)
    {
        $picture = Picture::where('session_id', $idSession)->where('challenge_id', $idChallenge)->where('user_id', $idUser)->first();
        $picture->state = "vérifié";
        $picture->save();

        $user = User::find($idUser);
        $challenge = Challenge::find($idChallenge);
        $user->points_won = $user->points_won + $challenge->points;
        $user->save();

        $completed = new CompletedChallenge();
        $completed->session_id = $idSession;
        $completed->user_id = $idUser;
        $completed->challenge_id = $idChallenge;
        $completed->save();

        return redirect()->route('index.validate');

    }

    public function deletePicture($idUser, $idSession, $idChallenge)
    {
        $picture = Picture::where('session_id', $idSession)->where('challenge_id', $idChallenge)->where('user_id', $idUser)->first();
        $picture->delete();
    }
}
