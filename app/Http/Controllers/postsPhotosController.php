<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Photos;
use App\Post;
use Illuminate\Support\Facades\Storage;

class postsPhotosController extends Controller
{
  public function index(){
    $photos=Photos::orderBy('id','desc')->get();
    return view('photos.index',['photos'=> $photos]);
  }

  public function details($id){
    $photo=Photos::find($id);
    return view('photos.details',['photo' => $photo]);
  }

  public function add(){
    return view('photos.add');
  }

  public function  insert(Request $request){
    // $this->validate($request);
    $file = $request->qqfile;
    $file->move('uploads',$file->getClientOriginalName());
    $photo = Photos::create([
                'img_dir' => $file->getClientOriginalName(),
                'name' => $file->getClientOriginalName(),
            ]);
    return response()->json(["success"=>true, 'photo_id'=>$photo->id, 'uuid'=>$request->qquuid]);
  }

  public function insertboth(Request $request){
      $post = Post::create([
          'title' => $request->title,
          'content' => $request->content,
          'publisher' => $request->publisher
        ]);
      foreach ($request->ary as $key) {
        Photos::find($key)->update(['post_id'=>$post->id]);
      }
      return response()->json(["success"=>true]);
  }

  public function edit($id){
    $photo=Photo::find($id);
    return view('photos.edit',['photo' => $photo]);
  }

  public function update($id,Request $request){
    $this->validate($request,[
      'img_dir'=>'required',
      'name'=>'required'
    ]);
    $photoData=$request->all();
    Photos::find($id)->update($photoData);
    Session::flash('success_msg','Photo updated Successfully');
    return redirect()->route('photos.index');
  }

  public function delete(Request $request){
    Photos::find($request->photo_id)->delete();
    return response()->json(["success"=>true]);
  }
}
