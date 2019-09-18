<?php

namespace App\Http\Controllers;

use App\WebPage;
use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = WebPage::all();
        return view('seopanel',compact('pages'));
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
        WebPage::where('id', request('WebPage'))
          ->update([
              'WebPageMTitle' => request('WebPageMTitle'),
              'WebPageMDesc' => request('WebPageMDesc'),
              'WebPageContent' => request('WebPageContent'),
              ]);

        return redirect('/admin/seopanel')->with('message','Seo Page Updated'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebPage  $webPage
     * @return \Illuminate\Http\Response
     */
    public function show(WebPage $webPage)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebPage  $webPage
     * @return \Illuminate\Http\Response
     */
    public function edit(WebPage $webPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebPage  $webPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebPage $webPage)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebPage  $webPage
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

        $idd= request('idd');

        WebPage::where('id',$idd )->delete();
       
        return redirect('/admin/seopanel');
    }
}
