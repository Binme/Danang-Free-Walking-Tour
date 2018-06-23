<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\New_detail;
use App\Post;

class NewController extends Controller
{
    public function index(){
    	$posts = Post::paginate(10);
    	return view('admin/news/index',compact('posts'));
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
    public function deletePost($id){
      $post = Post::findOrFail($id);
      $post->delete();
      return redirect()->back()->with('flash_message','Đã xóa bài post thành công');
    }
    public function viewNews($id){
      $post = Post::findOrFail($id);
      return view('admin/news/edit',compact('post'));
    }
    public function editNews(Request $request) 
    {
      $this->validate($request, [
          'title' => 'required',
          'author' => 'required',
          'body' => 'required',
          'img' => 'image|nullable|max:1999'
      ]);
      $post = Post::findOrFail($request->id);
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
        $input = array('img' => $fileNameToStore,'author' => $request->author,'author' => $request->author,'body' => $request->body);
        $post->update($input);
        return redirect('/admin/news/')->with('flash_message', 'Post Edited');
      }
      $input = array('author' => $request->author,'title' => $request->title,'body' => $request->body);
      $post->update($input);

      return redirect('/admin/news/')->with('flash_message', 'Post Edited');
    }
}
