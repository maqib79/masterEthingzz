<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Banner;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private function check_sales(){
         
     }
    public function index()
    {
        $data['FeaturedProducts'] = Product::featured()->get();
        $data['NewReleaseProducts'] = Product::newrelease()->get();
        $data['OnSaleProducts'] = Product::onsale()->get();
        $data['BestSellingProducts'] = Product::bestselling()->get();
        $data['Categories'] = Category::ParentCategory()->get();
        $data['Banners'] = Banner::all();
        $data['SaleCheck'] = Banner::all();
        $data['cart'] = Cart::content();
        $data['TotalAmountCart'] = Cart::subtotal();
        
        // $FeaturedProducts = Product::featured()->get();
        // $NewReleaseProducts = Product::newrelease()->get();
        // $BestSellingProducts = Product::bestselling()->get();
        // $OnSaleProducts = Product::onsale()->get();
        // $Categories = Category::all();
        return view('index',['data'=>$data]);

    }
 

    public function addcart(Request $request){
        $qty=$request->qty;
        $product = Product::where('id',$request->id)->get()->first();
        if(strtotime($product->sales->startdate)<=strtotime(date('Y-m-d')) && strtotime($product->sales->enddate)>=strtotime(date('Y-m-d'))){
            $price = $product->sales->first()->sale;
        }else{
            $price = $product->ProductPrice;
        }
        $productImage= $product->productimages->first()->name;
        Cart::add($product->id, $product->ProductName, $qty, $price,['image' => $productImage]);
        return response()->json(['success'=>$product->ProductName]);
    }
    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Product::where('ProductName', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->ProductName.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

    public function search($searchKey)
    {
        $data['Categories'] = Category::ParentCategory()->get();
        $data['Products'] = Product::search($searchKey)->get();
        $data['TotalAmountCart'] = Cart::subtotal();
        $data['cart'] = Cart::content();
        return view('search',['data'=>$data]);

    }
    public function category($category) {
        dd(Cart::content());
        
        $data['Categories'] = Category::ParentCategory()->get();
        $cat=str_replace('-', ' ', $category);
        $data['Products'] = Category::where('CategoryName',$cat)->get()->first();
        $data['pro'] = Product::where('category_id',$data['Products']->id)->paginate(1);
        $data['TotalAmountCart'] = Cart::subtotal();
        $data['cart'] = Cart::content();
       // dd($data['Products']->first()->product);
        return view('category',['data'=>$data]);
    }

    public function product($product) {
        $data['Categories'] = Category::ParentCategory()->get();
        $pro=str_replace('-', ' ', $product);
        $data['Products'] = Product::where('ProductName',$pro)->get()->first();
        $data['TotalAmountCart'] = Cart::subtotal();
        $data['cart'] = Cart::content();
        return view('product',['data'=>$data]);
    }

    public function quickview($product) {
        $data['Categories'] = Category::ParentCategory()->get();
        $pro=str_replace('-', ' ', $product);
        $data['Products'] = Product::where('ProductName',$pro)->get()->first();
        return view('quickview',['data'=>$data]);
    }



    public function viewcart(){
        $data['Categories'] = Category::ParentCategory()->get();
        $data['cart'] = Cart::content();
        $data['TotalAmountCart'] = Cart::subtotal();

        return view('cart',['data' => $data]);
    }

    public function checkout(){
        $data['Categories'] = Category::ParentCategory()->get();
        $data['cart'] = Cart::content();
        $data['TotalAmountCart'] = Cart::subtotal();

        return view('checkout',['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
