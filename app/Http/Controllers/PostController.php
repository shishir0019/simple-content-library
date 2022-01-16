<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/posts/index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posts/create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'slag' => 'required|min:3|max:15|unique:posts',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect(route('admin.posts.create'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['title', 'slag', 'category']);

        $post = Post::create([
            'title' => $body['title'],
            'slag' => $body['slag'],
            'category' => $body['category'],
        ]);

        if ($post) {
            return redirect(route('admin.posts.index'))->with('global-success', 'Post Createed successfully');
        } else {
            App::abort(500, 'Server Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.posts.create', ['post' => Post::find($id), 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'slag' => 'required|min:3|max:15|unique:posts,slag,'.$post->id,
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect(route('admin.posts.create'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['title', 'slag', 'category']);

        $post->fill($body)->save();

        if ($post) {
            return redirect(route('admin.posts.index'))->with('global-success', 'Post Update successfully');
        } else {
            App::abort(500, 'Server Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
