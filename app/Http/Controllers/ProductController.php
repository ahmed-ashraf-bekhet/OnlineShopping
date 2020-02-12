<?php

namespace App\Http\Controllers;

use App\product;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        return view('product.index')->with('products',$products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'Name' => 'required',
        //     'Salary' => 'required',
        //     'Items_Number' => 'required'
        // ]);

        $product = new product;
        $product->name = $request->input('Name');
        $product->description = $request->input('Description');
        if($request->has('product_image')){
            // $product->image = 'images/'.

        $request->input('product_image');
        $filenameWithExt = $request->file('product_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $request->file('product_image')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('product_image')->storeAs('public/images',$filenameToStore);
        }else{
            $filenameToStore = 'images/of.png'; 
        }
        $product->image = 'storage/images/'.$filenameToStore;
        $product->salary = $request->input('Salary');
        $product->num_of_items = $request->input('Items_Number');
        $product->save();
        return redirect('')->with('success','Product Created');
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
        $product = product::find($id);
        return view('product.edit')->with('product',$product);
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
        $product = product::find($id);
        $product->Name = $request->input('Name');
        $product->Description = '';
        $product->Image = 'images/of.png';
        $product->Salary = $request->input('Salary');
        $product->Num_of_Items = $request->input('Items_Number');
        $product->save();
        return redirect('')->with('success','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect('')->with('success','Product Deleted');

    }
}
