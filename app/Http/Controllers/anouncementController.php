<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Announcement;

class anouncementController extends Controller
{
    //
    public function index(){
      $announcements=Announcement::orderBy('created_at','desc')->get();
      return view('announcements.index',['announcements'=> $announcements]);
    }



public function add(){
  return view('announcements.add');
}

public function  insert(Request $request){
  $this->validate($request,['content' => 'required']);
  $postData=$request->all();
  Announcement::create($postData);
  Session::flash('success_msg','Announcement added Successfully');
  return redirect()->route('announcements.index');
}
public function delete($id){
  Announcement::find($id)->delete();
  Session::flash('success_msg','Announcement delected successfully');
  return redirect()->route('announcements.index');
}

}
