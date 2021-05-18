<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
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

       //$products = Product::where('available',true)->get();
        $products = Product::all()->take(20);
        $categories = Category::all();
        return view('components/products.index',compact('products','categories'));
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $categories = Category::all();
       return view('components/products.create',compact('categories')); 

    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $dataProductoForm = $request->validate([
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'price' => ['numeric','required'],
            'discount' => ['numeric','required'],
            'urlVideo' => ['required'],
            'available' => ['nullable'],
            'categories' => ['required']
            
        ]);

        

    $newProduct = new Product();
        $newProduct->name = $dataProductoForm['name'];
        $newProduct->description = $dataProductoForm['description'];
        $newProduct->price = $dataProductoForm['price'];
        $newProduct->discount = $dataProductoForm['discount'];
        $newProduct->urlVideo = $dataProductoForm['urlVideo'];
        isset($dataProductoForm['available']) ? $newProduct->available = true : $newProduct->available = false;
        
        $newProduct ->save();


        foreach ($dataProductoForm['categories'] as $category) {
            $newProductHasCategories = new ProductHasCategory();
            $newProductHasCategories->product_id = $newProduct['id'];
            $newProductHasCategories->category_id = $category;
            $newProductHasCategories->save();

        }

        //return redirect()->route('products.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       $products= Product::find($product->id);

       return view('components/products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
           //
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
