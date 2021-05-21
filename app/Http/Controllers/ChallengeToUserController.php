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

class ChallengeToUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $session = SessionsHome::find($user->session_id);
        $challenges = Challenge::where('session_id', $session->id)->get();



        return Inertia::render('user/challenges/Index', ['challenges' => $challenges]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create($id)
    {
        $user = User::find(Auth::id());
        $session = SessionsHome::find($user->id);
        $challenges = Challenge::find($session);
        $picture = Picture::where('challenge_id', $id)->where('user_id', $user->id)->where('session_id', $session->id)->get();
        $completedChallenge = CompletedChallenge::where('challenge_id', $id)->where('user_id', $user->id)->get();



        return Inertia::render('user/challenges/addChallengeUser', ['challenge' => $challenges, 'session' => $session, 'picture' => $picture, 'completedChallenge' => $completedChallenge]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $picture = new Picture();
        $session = SessionsHome::find(Auth::id());
       $vatidatedData =  $request->validate([
            'image' => 'image|max:5000',
            'comment' => 'max:5000'
        ]);

        $picture->image = $vatidatedData['image'];
        $picture->comment = $vatidatedData['comment'];
        $picture->user_id = Auth::id();
        $picture->session_id = $session->id;
        $picture->challenge_id = $id;
        $picture->state = "en cours de vérification";
        $picture->image = $request->file('image')->getClientOriginalName();
        if(request('image')) {
            $destination_path = 'public/images/pictureChallenges';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->storeAs($destination_path, $image_name);
        }
        $picture->save();

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function show($id)
    {
        $challenge = Challenge::find($id);
        return Inertia::render('user/challenges/IndexChallenge', ['challenge' => $challenge]);
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
    public function update(Picture $picture)
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

}
