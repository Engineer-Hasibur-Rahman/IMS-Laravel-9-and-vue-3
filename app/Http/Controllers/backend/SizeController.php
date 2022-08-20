<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Size;

class SizeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all size
        $sizes = Size::orderby('created_at', 'DESC')->get();        
        return view('sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // size create page

        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // size valadation
        $this->validate($request,[            
            'size' => 'required|min:1|max:50|unique:sizes',
        ]);        

        // data store
        $sizes = new Size();
        $sizes->size = $request->size;
        $sizes->save();   
        
        flash('Size create successufully')->success();

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
        // size edit
        $edit_size = Size::find($id);
        return view('sizes.edit', compact('edit_size'));
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
            'size' => 'required|min:2|max:50|unique:sizes,size'  
       ]);

        $update_size = Size::findOrFail($id);
        $update_size->size = $request->size;        
        $update_size->save();

        flash('Size update successufully')->success();
        return redirect()->route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete size
        $delete_size = Size::findOrFail($id); 
        $delete_size->delete();

       flash('Size Delete successufully')->error();
       return back();
    }
}
