<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {

        $input=cat::all();
        return view('admin.pages.category.index')->with('cat',$input);


    }

    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        cat::create($input);
        return redirect('admin/category')->with('success','Category create successfully');
    }
    public function show(cat $cat)
    {

    }

    public function edit($id)
    {
        $input=cat::find($id);
        return view('admin.pages.category.edit')->with(['cat'=>$input]);
    }

    public function update(Request $request, $id)
    {
        $assain=cat::find($id);
        $input=$request->all();
        $assain->update($input);
        return redirect('admin/category')->with(['update'=>'Your category is Updated']);
    }


    public function destroy($id)
    {
        cat::destroy($id);
        return redirect('admin/category')->with('delete', 'Category has been deleted');
    }
}
