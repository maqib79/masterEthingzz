<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrlRedirect;

class UrlRedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urlredirect');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $count = UrlRedirect::where('OldUrl', request('OldUrl'))->count();
        if($count!=0){
            $urlredirect = UrlRedirect::where('OldUrl',request('OldUrl'))
            ->update([
                'OldUrl' => request('OldUrl'),
                'NewUrl' => request('NewUrl'),
            ]);
        }else{

            $urlredirect = UrlRedirect::create($this->RequestData());
        }
        
        return redirect('/admin/urlredirect/create')->with('message','Url Inserted');
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

    private function RequestData(){
        return request()->validate([
            'OldUrl'=> 'required',
            'NewUrl'=> 'required',
        ]);
    }
}
