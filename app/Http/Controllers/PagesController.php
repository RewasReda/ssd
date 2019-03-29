<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To SSD!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function bedeveloper (){
        $title = 'Be Developer';
        return view('pages.bedeveloper')->with('title', $title);
    }
    public function devv (){
        auth()->user()->type='developer';
        auth()->user()->save();
        return redirect('/')->with('success', 'Now Dev');

    }

    public function bedeveloperpage (){
        $title = 'Be Developer page';
        return view('pages.bedeveloperpage')->with('title', $title);
    }

}
