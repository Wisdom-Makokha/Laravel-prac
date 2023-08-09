<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

//functions for the blog controller will be here
class blogcontroller extends Controller
{
    //function to create new blogs
    function createblog(Request $request)
    {
        //request validation
        $request->validate([
            'title' => 'required',
            'blogpost' => 'required',
            'dateposted' => 'required'
        ]);

        //blog details obtained from request
        $post = Blog::create([
            'title' => $request->title,
            'blogpost' => $request->blogpost,
            'dateposted' => $request->dateposted
        ]);

        $post = Blog::find($post->id);
        //check if the post is successfully created
        if ($post) {
            return response()->json($post);
        } else {
            return response("Post creation unsuccessful");
        }
    }

    //function to read all blogs
    function readallblogs()
    {
        //get the blogs from the db
        $blogs = Blog::all();

        //check if there are any blogs
        if ($blogs) {
            return response()->json($blogs);
        } else {
            return response("No blogs found");
        }
    }

    //function to read a blog
    function readablog(Request $request)
    {
        //validate request
        $request->validate([
            'id' => 'required'
        ]);

        //get the post from the db
        $post = Blog::find($request->id);

        //check if the post exists and return a response
        if ($post) {
            return response()->json($post);
        } else {
            return response("No such blog exists");
        }
    }

    function updateblog(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'blogpost' => 'required',
            'dateposted' => 'required'
        ]);

        $post = Blog::find($request->id);

        if ($post) {
            $post->title = $request->title;
            $post->blogpost = $request->blogpost;
            $post->dateposted = $request->dateposted;

            $post->save();

            return response()->json($post);
        } else {
            return response("Update unsuccessful, No such blog exists");
        }
    }

    function deleteblog(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        $post = Blog::find($request->id);

        if($post){
            $deletedpost = $post;
            $post->delete();

            return response()->json($post);
        } else{
            return response("Delete unsuccessful, No such blog exists");
        }
    }
}