<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use Storage;

class ManageGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $games = Game::where('approve','=',1)->get();
        return view('pages.managegames')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()->type !=='admin'){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }
        

        return view('games.create');
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
        // $user = ::find($id);
        // $user->forcedelete();
        // return redirect('/managegames')->with('success','Game removed');
        $game = Game::find($id);
        // Check for correct user
        
        if($game->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$game->cover_image);
        }

        $game->delete();
        return redirect('/games')->with('success', 'Game Removed');

    }
}
