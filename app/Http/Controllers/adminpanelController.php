<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Announcement;

class adminpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    		$posts=Post::orderBy('created_at','desc')->get();
            $announcements=Announcement::orderBy('created_at','desc')->get();
      	return view('adminpanel.panel',['posts'=> $posts],['announcements'=>$announcements]);
    }
}
