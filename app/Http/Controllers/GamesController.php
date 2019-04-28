<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Storage;
use App\Http\Controllers\GamesBuilderController;



class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *..
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        //
        $games = Game::orderBy('created_at','desc')->paginate(10);
        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()->type !=='developer'){
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
    public function store(Request $request,game $game)
    {
        
        $game = new game;
        $gamebuilder = new GamesBuilderController;
        $game = $gamebuilder->store($request , $game);
        $game->save();
        return redirect('/games')->with('success', 'game Added');
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
        $game = Game::find($id);
        return view('games.show')->with('game', $game);

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
        $game = Game::find($id);
        // Check for correct user
        if(auth()->user()->id !==$game->user_id){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }
        return view('games.edit')->with('game', $game);
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
        $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
    ]);
         // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        // Create game
        $game = Game::find($id);
        $game->title = $request->input('title');
        $game->body = $request->input('body');
        $game->category = $request->input('category');
        if($request->hasFile('cover_image')){
            $game->cover_image = $fileNameToStore;
        }
        $game->save();
        return redirect('/games')->with('success', 'Game Updated');

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
        $game = Game::find($id);
        // Check for correct user
        if(auth()->user()->id !==$game->user_id){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }
        if($game->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$game->cover_image);
        }

        $game->delete();
        return redirect('/games')->with('success', 'Game Removed');
    }
}
