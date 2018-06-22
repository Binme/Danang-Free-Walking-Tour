<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\New_detail;
use App\Post;

class NewController extends Controller
{
    public function index(){
    	$news = DB::table('news')->paginate(10);
    	return view('admin/news/index',compact('news'));
    }
	public function xuLyUpLoad(Request $request) 
	{
      $this->validate($request, [
          'title' => 'required',
          'author' => 'required',
          'body' => 'required',
          'img' => 'image|nullable|max:1999'
      ]);
      if($request->hasFile('img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img')->move('assets/images/posts/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->img = $fileNameToStore;
        $post->save();

        return redirect()->back()->with('flash_message', 'Post Created');
	}
}
