<?php

namespace App\Http\Controllers;

use App\Models\aProduct;
use App\Models\Company;
use App\Models\Sell;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class aProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $data = Company::all();
        return view('auth.add_product',[
            'data' => $data
        ]);
        }
    }

    public	function buy()
    {
    	$products1 = aProduct::all();
        return view('auth.buy', compact('products1'));
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
        $products=new aProduct;
        $products->id=$request->get('pid');
        $products->pname=$request->get('pname');
        $products->pcompany=$request->get('pcom');
        $products->price=$request->get('price');
        $products->quantity=$request->get('quantity');

        if($request->hasFile('pimg')){
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move("uploads/product/", $filename);
            $products->product_img = $filename;
        }

        $products->save();

        return redirect('/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aProduct  $aProduct
     * @return \Illuminate\Http\Response
     */
    public function show(aProduct $aProduct, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $products1=aProduct::all();
        return view('show',['products1'=>$products1]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aProduct  $aProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(aProduct $aProduct, $id, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $products=aProduct::find($id);
        return view('edit_product',compact('products'));
        }
    }

    function sells(Request $req, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $sell = new Sell;
        $sell->spid=$req->spid;
        $sell->save();
        return redirect('/sell');
        }
    }

    function sells1(Request $req)
    {
        $sell = new Sell;
        $sell->spid=$req->spid;
        $sell->save();
        return redirect('/sell');
    }

    function selllist(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $products= DB::table('sell')
        ->join('t_products','sell.spid','=','t_products.id')
        ->select('t_products.*')->get();
        return view('auth.sell',['products'=>$products]);
        }
    }
    function buylist(Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            $products= DB::table('sell')
        ->join('t_products','sell.spid','=','t_products.id')
        ->select('t_products.*')->get();
        return view('auth.bproduct',['products'=>$products]);
        }
    }

    public	function invoice(aProduct $aProduct)
    {
        $products= DB::table('sell')
        ->join('t_products','sell.spid','=','t_products.id')
        ->select('t_products.*')->get();
        return view('auth.invoice',['products'=>$products]);

    }

    function detail($id, Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            $data =aProduct::find($id);
        return view('auth.detail',['product'=>$data]);
        }
    }

    function detail2($id, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $data =aProduct::find($id);
        return view('auth.detail2',['product'=>$data]);
        }
    }

    function report()
    {
        $products= DB::table('sell')
        ->join('t_products','sell.spid','=','t_products.id')
        ->select('t_products.*')->get();
        return view('auth.report',['products'=>$products]);
    }



    public function update(Request $request, aProduct $aProduct, $id)
    {
        $products=aProduct::find($id);
        $products->id=$request->get('pid');
        $products->pname=$request->get('pname');
        $products->pcompany=$request->get('pcompany');
        $products->price=$request->get('price');
        $products->quantity=$request->get('quantity');

        if($request->hasFile('pimg')){
            $destination = 'uploads/product/'.$products->product_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move("uploads/product/", $filename);
            $products->product_img = $filename;
        }

        $products->save();
        return redirect('show');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aProduct  $aProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(aProduct $aProduct, $id)
    {
        $aProduct=aProduct::find($id);
        $aProduct->delete();
        return redirect('show');
    }


    public function sell(Request $request,aProduct $aProduct, $id)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $products=aProduct::find($id);
        return view('sell_product');
        }
    }

    public function addToCart(Request $req){
            if ($req->session()->has('LoggedUser1')) {
                $cart = new Cart;
                $cart->buyer_id = $req->session()->get('LoggedUser1');
                $cart->product_id = $req->product_id;
                $cart->pprice = $req->pprice;
                $cart->pquantity = $req->pquantity;
                $cart->tprice = $req->pquantity * $req->pprice;
                $cart->save();
                return redirect('/cartlist');
            }else {
                return redirect('/auth/blogin');
            }
    }
    function orderPlace(Request $request)
    {
        $userId = Session::get('LoggedUser1');
        $allCart = Cart::where('buyer_id',$userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['buyer_id'];
            $order->prod_quantity = $cart['pquantity'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('buyer_id',$userId)->delete();
        }
        $request->input();
        return redirect('/bhome');
    }

    static function cartItem()
    {
        $userId = Session::get('LoggedUser1');
        return Cart::where('buyer_id',$userId)->count();
    }

    function cartList(Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            $userId = Session::get('LoggedUser1');
        $products = DB::table('cart')
        ->join('t_products','cart.product_id','=','t_products.id')
        ->where('cart.buyer_id',$userId)
        ->select('t_products.*','cart.id as cart_id')->get();
        return view('cartlist',['products'=>$products]);
        }
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            $userId = Session::get('LoggedUser1');
        $total1 = DB::table('cart')
        ->join('t_products','cart.product_id','=','t_products.id')
        ->where('cart.buyer_id',$userId)
        ->sum('cart.tprice');
        return view('ordernow',['total2'=>$total1]);
        }
    }

    function myOrder(Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            $userId = Session::get('LoggedUser1');
        $orders = DB::table('orders')
        ->join('t_products','orders.product_id','=','t_products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorder',['orders'=>$orders]);
        }
    }
}
