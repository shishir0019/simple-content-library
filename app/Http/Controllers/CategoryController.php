<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/categories/index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categories/create');
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
            'name' => 'required|min:3',
            'slag' => 'required|min:3|max:15|unique:categories',
        ]);

        if ($validator->fails()) {
            return redirect(route('admin.categories.create'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['name', 'slag']);

        $category = Category::create([
            'name' => $body['name'],
            'slag' => $body['slag']
        ]);

        if ($category) {
            return redirect(route('admin.categories.index'))->with('global-success', 'Post Createed successfully');
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
        return view('admin.categories.create', ['category' => Category::find($id)]);
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
        $category = Category::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'slag' => 'required|min:3|max:15|unique:categories,slag,'.$category->id
        ]);

        if ($validator->fails()) {
            return redirect(route('admin.categories.create'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['name', 'slag']);

        $category->fill($body)->save();

        if ($category) {
            return redirect(route('admin.categories.index'))->with('global-success', 'Category update successfully');
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
        return redirect(route('admin.categories.index'))->with('global-success', 'Deletion success.');
    }
}
