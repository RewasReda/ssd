<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Game;
use Storage;
use App\Http\Controllers\GamesBuilderController;
use App\classes\CreateFacade;
use App\classes\GamesFactory;




class GamesController extends Controller
{

    public function add_to_cart(Request $request){
        $allData = $request->all();
        dd($allData);
        foreach($allData as $oneSelect=>$value){
            if(is_numeric($oneSelect)){
                cart::create([
                    'user_id'=>Auth::User()->id,
                    'game_id'=>$oneSelect
                ]);
            }
        }
        return back();
    }
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
    

    //    public function index()
    // {
    //     $createFactory = new CreateFactory;
    //     $creategame = $createFactory->gettype(auth()->user()->type);
    //     $creategame->showgame();
    // } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     if(auth()->user()->type !=='developer'){
    //         return redirect('/games')->with('error', 'Unauthorized Page');
    //     }
        

    //     return view('games.create');
    // }

    // public function createAdmin()
    // {
    //     //
    //     if(auth()->user()->type !=='admin'){
    //         return redirect('/games')->with('error', 'Unauthorized Page');
    //     }
        

    //     return view('games.create');
    // }

        public function create()
    {
      
        $createfacade = new CreateFacade;
        $creategame = $createfacade->gettype(auth()->user()->type);
        return $creategame->addgame();
        
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
        if(auth()->user()->type =='admin')
        $game->approve=1;
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
        // $reviews = Review::orderBy('created_at','desc')->paginate(10);
        // return view('games.show')->with('game', $game)->with('reviews',$reviews);
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
        
        // Create game
        $game = Game::find($id);
         $gamebuilder = new GamesBuilderController;

        $game = $gamebuilder->update($request ,$game);
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
        if(auth()->user()->id !==$game->user_id || auth()->user()->type !== "admin"){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }
        if($game->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$game->cover_image);
        }

        $game->delete();
        return redirect('/games')->with('success', 'Game Removed');
    }

    public function destroyAdmin($id)
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

    public function approve($id)
    {
        //
        $game = Game::find($id);
        // Check for correct user
        if(auth()->user()->type !== 'admin'){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }

        $game->approve = 1;
        $game->save();
        return redirect('/games/0/indexAdmin')->with('success', 'Game approved');
    }

    // public function approvegame (){
    //     // $title = 'Approve games';
    //     // return view('pages.approvegames')->with('title', $title);

    //     //$games = Game::all();
    //     $games = Game::where('approve','=',0)->get();
    //     return view('pages.approvegames')->with('games',$games);
    // }
    // public function indexAdmin()
    // {
 
    //     $games = Game::where('approve','=',1)->get();
    //     return view('pages.managegames')->with('games', $games);
    // }

    public function indexAdmin($flag)
    {
      
        $gamesfactory = new GamesFactory;
        $showgame = $gamesfactory->gettype($flag);
        return $showgame->games();
        
    }
}
