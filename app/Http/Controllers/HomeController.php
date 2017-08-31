<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Photos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('welcome');
    }
    public function academic()
    {
            return view('academic');
    }
    public function departments()
    {
            return view('departments');
    }

    public function research()
    {
            return view('research');
    }

    public function about()
    {
            return view('about');
    }

    public function civil()
    {
            return view('departments.civil');
    }

    public function mech()
    {
            return view('departments.mech');
    }
    public function mecha()
    {
            return view('departments.mecha');
    }
    public function ec()
    {
            return view('departments.ec');
    }
    public function ep()
    {
            return view('departments.ep');
    }
    public function ceit()
    {
            return view('departments.ceit');
    }
    public function che()
    {
            return view('departments.che');
    }
    public function archi()
    {
            return view('departments.archi');
    }
     public function ir()
    {
            return view('departments.ir');
    }
     public function maths()
    {
            return view('departments.maths');
    }
     public function eng()
    {
            return view('departments.eng');
    }
     public function myan()
    {
            return view('departments.myan');
    }
    public function postList(){
        $posts = Post::orderBy('created_at' , 'desc')->simplePaginate(8);
        $pageCount = $posts->count();
        $photos=Photos::orderBy('id','desc')->get();
        $posts->withPath('postList');
        return view('postList' , array('posts' => $posts , 'pageCount' => $pageCount , 'photos' => $photos));
    }
    public function post($id){
        $post=Post::find($id);
        $photos=Photos::where('post_id',$id)->get();
        return view('post', ['post' => $post,'photos' => $photos]);
    }
}
