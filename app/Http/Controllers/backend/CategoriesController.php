<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model add
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all caregory

        $cat = Category::orderby('created_at', 'DESC')->select('name','id')->get();

        //  dd($cat)->all();
        return view('categories.index', compact('cat'));
    }                

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create page
        return view('categories.create');

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // validation
          $this->validate($request, [
            'name' => 'required|min:2|max:50|unique:categories'   
       ]);
      // create category
      $category = new Category();
      
      $category->name = $request->name;

      $category->save();

      flash('categoru create successufully')->success();
      return back();

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
        // category edit
        $edit_cat = Category::find($id);

        return view('categories.edit', compact('edit_cat')); 
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
        // validation
          $this->validate($request, [
            'name' => 'required|min:2|max:50|unique:categories,name'  
       ]);

       $update_category = Category::findOrFail($id);

       $update_category->name = $request->name;

       $update_category->save();

       flash('categoru update successufully')->success();

       return redirect()->route('categories.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_category = Category::findOrFail($id); 
        $delete_category->delete();

       flash('Category Delete successufully')->error();
       return back();
    }

}

