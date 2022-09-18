<?php

namespace App\Http\Controllers;

use App\Models\unit;
use Illuminate\Http\Request;
use App\Http\Requests\unitFormValidation;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit= unit::all();
        return view('admin.pages.unit.index')->with('unit', $unit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.unit.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(unitFormValidation $request)
    {
        $input= $request->all();
        unit::create($input);
        return redirect('admin/unit')->with('success','Unit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = unit::find($id);
        return view('admin.pages.unit.edit')->with('unit',$unit);
    }


    public function update(unitFormValidation $request, $id)
    {
        $unit = unit::find($id);
        $input = $request->all();
        $unit->update($input);
        return redirect('admin/unit')->with(['update'=>'Your Unit is Updated']);
    }


    public function destroy($id)
    {

        unit::destroy($id);
        return redirect('admin/unit')->with('delete', 'Unit has been deleted');
    }
}
