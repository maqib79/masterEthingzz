<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
            //dd($categories);
        return view('viewcategory',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
            //dd($categories);
        return view('addcategory',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        

        $category=Category::create($this->Requestdata());
        $this->storeImage($category);
        return redirect('/admin/category')->with('message','Category Added');
         
        //dd($request);

        // $name=request('CategoryName');
        // $prnt=request('CategoryParent');
        
        // $customer = new Category();
        // $customer->CategoryName=$name;
        // $customer->CategoryParent=$prnt;
       
        // $customer->save();
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
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('editcategory',compact('category','categories'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        $category->update($this->Requestdata());
            $this->storeImage($category);
        return redirect('/admin/category')->with('message','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //$idd= request('idd');

        $category->delete();
       
        return redirect('/admin/category')->with('message','Category Deleted');
    }

    private function Requestdata(){
        
        return request()->validate(
            [
                'CategoryName'=> 'required|min:3',
                'CategoryParent'=> 'required',
                'CategoryImage'=> 'required|file|image|max:5000',
                'CategoryBanner'=> 'required|file|image|max:5000',
                'CategoryMTitle'=> 'required',
                'CategoryMDescription'=> 'required',
                'CategoryDescription'=> 'required',
            ]
            );
    }


    private function storeImage($category)
    {
        if (request()->has('CategoryImage')) {
            //dd($category);
            $category->update([
                'CategoryImage' => request()->CategoryImage->store('category_images', 'public'),
                'CategoryBanner' => request()->CategoryBanner->store('category_images', 'public'),
            ]);
            // $category->update([
            //     'CategoryImage' => request()->CategoryImage->store('category_images', 'public'),
            // ]);

            // $image = Image::make(public_path('storage/'.$category->CategoryImage))->fit(300,300);
            // $image->save();
          
        }
    }
}
