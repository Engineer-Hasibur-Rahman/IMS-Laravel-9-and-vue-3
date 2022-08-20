<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model add
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all caregory

        $brand = Brand::orderby('created_at', 'DESC')->select('brand_name','id')->get();

        //  dd($cat)->all();
        return view('brand.index', compact('brand'));
    }                

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create page
        return view('brand.create');

       
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
            'brand_name' => 'required|min:2|max:50|unique:brands'   
       ]);
      // create brand
      $brand = new Brand();
      
      $brand->brand_name = $request->brand_name;

      $brand->save();

      flash('Brand create successufully')->success();
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
        // Brand edit
        $edit_brand = Brand::find($id);

        return view('brand.edit', compact('edit_brand')); 
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
            'brand_name' => 'required|min:2|max:50|unique:brands,brand_name'  
       ]);

       $update_brand = Brand::findOrFail($id);
       $update_brand->brand_name = $request->brand_name;
       $update_brand->save();
       flash('Brand update successufully')->success();
       return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_brand = Brand::findOrFail($id); 
        $delete_brand->delete();

       flash('Brand Delete successufully')->error();
       return back();
    }

}

