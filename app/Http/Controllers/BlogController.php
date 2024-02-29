<?php
/*******************************
    Author : Sibin V M
    Title : Blog Controller
    Created Date : 10-06-2022
********************************/

namespace App\Http\Controllers;

use App\Http\Helpers\CommonHelper;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use CommonHelper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();

        // returns the view with the posts
        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returns the create form
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
    {
        // insert data into the database and return the inserted row
        $res = $this->createOrUpdate($request, $blog, 'save');
        
        // returns the view with the post with create message
        return redirect()->route('blog.show', [$res->id])->with(['msg'=>'Post created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // returns the view with the post
        return view('blog.show', [
            'post' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        // return the edit form with the post
        return view('blog.edit', [
            'post' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // delete post image from the storage
        if ($blog->image != NULL) {
            unlink(storage_path().'/app/public/images/'.$blog->image);
        }

        // update data into the database and return the updated row
        $res = $this->createOrUpdate($request, $blog, 'update');

        // returns the view with the post and update message
        return redirect()->route('blog.show', [$res->id])->with(['msg'=>'Post updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // delete post from the database
        $blog->delete();

        // delete post image from the storage
        if ($blog->image != NULL) {
            unlink(storage_path().'/app/public/images/'.$blog->image);
        }

        // return redirect to home with delete message
        return redirect('/')->with(['msg'=>'Post deleted successfully']);
    }
}
