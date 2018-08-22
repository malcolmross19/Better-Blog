<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Like;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    /**
     * Display a listing of the blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create-blog');
    }

    /**
     * Store a newly created blog in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function store(Request $request)
    {
        //
        $blog = new Blog();
        $blog->author = Auth::user()->name;
        $blog->title = $request->get('blogTitle');
        $blog->body = $request->get('blogBody');
        $blog->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Display blog post using unique id
        $blog = Blog::find($id);
        return view('pages.show-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::find($id);
        return view('pages.edit-blog', compact('blog'));
    }

    /**
     * Update the specified blog in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $blog = Blog::find($id);
        $blog->title = $request->get('blogTitle');
        $blog->body = $request->get('blogBody');
        $blog->save();
        return redirect('/blogs');
    }

    /**
     * Remove the specified blog from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete blog from database
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs');
    }

    /**
     * Saves a like to the database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveLike(Request $request)
    {
        //
        $likecheck = Like::where(['user_id'=>Auth::id(),'blogs_id'=>$request->id])->first();
        $blog = Blog::where(['id'=>$request->id])->first();
        if ($likecheck) {
          Like::where(['user_id'=>Auth::id(),'blogs_id'=>$request->id])->delete();
          $blog->likes = $blog->likes - 1;
          $blog->save();
          return back();
        } else {
          $like = new Like;
          $like->user_id = Auth::id();
          $like->blogs_id = $blog->id;
          $like->save();
          $blog->likes = $blog->likes + 1;
          $blog->save();
          return back();
        }
    }
}
