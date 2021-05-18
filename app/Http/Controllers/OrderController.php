<?php

namespace App\Http\Controllers;

use App\Models\Order;use App\Models\OrderHasProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
       
       $this -> middleware(['auth']);

    }

    public function total(){
        if (session()->has('cart')){
            $total = 0;
            foreach (session()->get('cart.products') as $product) {
               $total = $total + ($product['product']->price * $product['amount']);
            }
           }else{
               $total = 0;
           }
        return $total;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total= $this->total();

        if (session()->has('cart') == false) {
            return redirect()->route('products.index',compact('total'));
        } else {
            $cartProducts = session()->get('cart.products');
            return view('components/orders.index', compact('total','cartProducts'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $total= $this->total();
        $cartProducts = session()->get('cart.products');
        $dataProductoForm = $request->validate([
            'payment' => ['string', 'required'],
            'id' => [ 'required']
        ]);
        $newOrder = new Order();
        $newOrder->payment = $dataProductoForm['payment'];
        $newOrder->state = 'pending';
        $newOrder->final_price = $total;
        $newOrder->users_id = $dataProductoForm['id'] ;
        $newOrder->save();

        foreach ($cartProducts as $item) {
            $products = new OrderHasProduct();
             $products->amount = $item['amount'];
            $products->product_id =  $item['product']->id;
            $products->order_id =  $newOrder->id;
            $products->save();
        }
        $request->session()->put('cart', ['products' => []]);        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
