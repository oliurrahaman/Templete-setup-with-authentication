<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\unit;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\productFormValidation;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input=product::all();
        return view('admin.pages.products.index')->with('products',$input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = cat::all();
        $unit = unit::all();

        return view('admin.pages.products.create')->with(['category'=>$category,'unit'=>$unit]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productFormValidation $request)
    {
        // $input= $request->all();
        $name = $request->name;
        $category = $request->category;
        $date = $request->date;
        $price = $request->price;
        $unit = $request->unit;
        $is_sample_product = $request->filled('is_sample_product');
        $Details = $request->Details;
        $country = $request->country;
        $time = $request->time;
        $sale_range = $request->sale_range;
        $features = $request->features;
        $img = $request->file('img');
        $img_name= hexdec(uniqid()). '.' .$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);
       product::insert([
            'name'=>$name,
            'category'=>$category,
            'date'=>$date,
            'price'=>$price,
             'unit'=>$unit,
            'is_sample_product'=>$is_sample_product,
            'Details'=>$Details,
            'country'=>$country,
            'time'=>$time,
            'sale_range'=>$sale_range,
            'features'=>$features,
            'img'=>$img_url,
       ]);
        return redirect('admin/product');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = product::find($id);

        return view('admin.pages.products.show')->with('product',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = unit::all();
        $category = cat::all();
        $product = product::find($id);
        return view('admin.pages.products.edit')->with(['category'=>$category,'product'=>$product,'unit'=>$unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(productFormValidation $request, $id)
    {
        $product = product::find($id);
        $name = $request->name;
        $category = $request->category;
        $date = $request->date;
        $price = $request->price;
        $unit = $request->unit;

        $is_sample_product = $request->filled('is_sample_product');
        $Details = $request->Details;
        $country = $request->country;
        $time = $request->time;
        $sale_range = $request->sale_range;
        $features = $request->features;

        $img = $request->file('img');
        $img_name= hexdec(uniqid()). '.' .$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);



        $input=([
            'name'=>$name,
            'catId'=>$category,
            'date'=>$date,
            'price'=>$price,
             'unit'=>$unit,
            'is_sample_product'=>$is_sample_product,
            'Details'=>$Details,
            'country'=>$country,
            'time'=>$time,
            'sale_range'=>$sale_range,
            'features'=>$features,
            'img'=>$img_url,
       ]);
       $product->update($input);
       return redirect('admin/product')->with(['update'=>'Your Product is Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect('admin/product')->with('delete', 'Product has been deleted');
    }
}
