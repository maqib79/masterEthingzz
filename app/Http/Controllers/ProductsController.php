<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductImages;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        
        $products = Product::paginate(15);
=======
        $products = Product::paginate(12);
>>>>>>> 18ec2bb4c3db57ad2fbc27761997d8892ecdcda6
        return view('viewproduct',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
       
        return view('addproduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $aa=request()->ProductImages;
        
        // foreach ($aa as $key) {
        //     dump($key);
        // }

       // request()->ProductImages->store('product_images', 'public')
        $product = Product::create($this->Requestdata());

        $this->storeImages($product);
        $this->storeSale($product);

        return redirect('/admin/product')->with('message','Product Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories= Category::all();
        return view('editproduct',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($this->Requestdata());
        $this->updateImages($product);
        $this->updateSale($product);
        return redirect('/admin/product')->with('message','Product Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/product')->with('message','Product Deleted');
    }


    private function Requestdata(){
        
        return request()->validate(
            [
                'category_id'=> 'required',
                'ProductTag'=> 'required',
                'ProductName'=> 'required|min:3',
                'ProductPrice'=> 'required',
                'ProductInstock'=> 'required',
                'ProductQuantity'=> 'required',
<<<<<<< HEAD
                // 'ProductSKU'=> 'required|unique:products,ProductSKU',
                'ProductSKU'=> 'required',
                'ProductMtitle'=> 'nullable',
                'ProductMDesc'=> 'nullable',
=======
                'ProductSKU'=> 'required',
                'ProductMtitle'=> 'required',
                'ProductMDesc'=> '',
>>>>>>> 18ec2bb4c3db57ad2fbc27761997d8892ecdcda6
                'ProductBrand'=> 'required',
                'ProductWarranty'=> 'required',
                'ProductDesc'=> 'required',
                'ProductLongDesc'=> 'required',
                'ProductIndex'=> 'required',
                'ProductCustomLink'=> '',
                
            ]
            );
    }

//     private function storeImages($product){

//         if (request()->has('ProductImages')) {
//             //dd($category);
//             $files=$request->file('ProductImages');
//             foreach ($files as $file) {

//                 $product->productimages()->create([
//                     'name' => request('ProductImages'),
//                 ]);

//                 // // $user->posts()->create([

// // //   'post'=> 'new POST',
// // //   'body' => 'Better BOdy',

// // // ]);

//                 ProductImages::where('p_id',$product->id)
//                         ->update([
//                             'ProductImages' => request()->ProductImages->store('product_images', 'public'),
//                         ]);
           
           
//                 }

            
//             // $category->update([
//             //     'CategoryImage' => request()->CategoryImage->store('category_images', 'public'),
//             // ]);

//             // $image = Image::make(public_path('storage/'.$category->CategoryImage))->fit(300,300);
//             // $image->save();
          
//         }
//     }


    private function storeImages($product)
    {
        if (request()->has('ProductImages')) {

            $images=request()->ProductImages;
        
            foreach ($images as $image) {
                $product->productimages()->create([
    
                    'name' => $image->store('product_images', 'public'),
                    'alttag' => '',
                
                ]);
            }
          
        }
    }

    private function updateImages($product)
    {
        if (request()->has('ProductImages')) {
            //dd( $product->productimages());
            $product->productimages()->delete();
            $images=request()->ProductImages;
            foreach ($images as $image) {
               
                $product->productimages()->create([
                    'name' => $image->store('product_images', 'public'),
                    'alttag' => '',
                ]);
            }
          
        }
    }

    private function storeSale($product)
    {
        if (request()->has('sale')) {
                $product->sales()->create([
                    'sale' => request('sale'),
                    'startdate' => request('startdate'),
                    'enddate' => request('enddate'),
                ]);
        }
    }

    private function updateSale($product)
    {
        if (request()->has('sale')) {

                $product->sales()->update([
    
                    'sale' => request('sale'),
                    'startdate' => request('startdate'),
                    'enddate' => request('enddate'),
                
                ]);
            
          
        }
    }
}
