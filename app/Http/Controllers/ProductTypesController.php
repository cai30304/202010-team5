<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductTypes;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductTypes::orderBy('sort','asc')->get();// select * from 'product_types' ordery('sort',asc) 

        return view('BackeStage/Prosuct_Types/index',compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackeStage/Prosuct_Types/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->sort == null){
            $request->sort = 1;
        }
        // dd($request->all());
        ProductTypes::create($request->all());

        return redirect('/admin/ProductsTypes');
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
        $product_type = ProductTypes::find($id);

        return view('BackeStage/Prosuct_Types/edit',compact('product_type'));
        // dd($product_type);

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
        // dd('update');
        ProductTypes::where('id','=',$id)->update(['type_name' => $request->type_name,'sort' => $request->sort]);
        return redirect('/admin/ProductsTypes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy'.$id);
        // dd(ProductTypes::find($id)->with('products')->get());
        ProductTypes::find($id)->delete();
        return redirect('/admin/ProductsTypes/');
    }
}
