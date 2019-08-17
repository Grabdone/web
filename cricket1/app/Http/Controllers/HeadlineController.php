<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\headlines;

class HeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headlines= headlines::all()->sortByDesc("id");
        return view('admin.adminheadlines',compact('headlines'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmen()
    {
        $headlines= headlines::where('series','Icc Men')->orderBy('id','desc')->get();
        return view('admin.adminheadlines',compact('headlines'));
    }
    public function indexbbl()
    {
        $headlines= headlines::where('series','Big Bash')->orderBy('id','desc')->get();
        return view('admin.adminheadlines',compact('headlines'));
    }
    public function indexpsl()
    {
        $headlines= headlines::where('series','PSL')->orderBy('id','desc')->get();
        return view('admin.adminheadlines',compact('headlines'));
    }
    public function create()
    {
        return view('admin.createheadline');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request,[
            'imagepath'=> 'required',
            'title'=> 'required',
            'auther'=> 'required',
            'news'=> 'required',
            'series'=> 'required',
            'timepublished'=> 'required'

        ]);

        /*$image = $request->file('imagepath');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        $file_path = $new_name->getPathName();
        */
        

        $headline = new headlines([
            'title'=>   $request->get('title'),
            'auther'=>  $request->get('auther'),
            'news'=>  $request->get('news'),
            'timepublished'=>  $request->get('timepublished'),
            'series'=>  $request->get('series'),
            'imagepath'=> $request->get('imagepath')
        ]);


        $headline->save();
        return redirect()->route('headline.index')->with('success','Data Added');
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
        $headline= headlines::find($id);
        return view('admin.adminheadlinesedit',compact('headline','id'));
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

        
        $this->validate($request,[
            'imagepath'=> 'required',
            'title'=> 'required',
            'auther'=> 'required',
            'news'=> 'required',
            'series'=> 'required',
            'timepublished'=> 'required'
        ]);
        $headline = headlines::find($id);
        $headline->imagepath=$request->get('imagepath');
        $headline->title=$request->get('title');
        $headline->auther=$request->get('auther');
        $headline->news=$request->get('news');
        $headline->series=$request->get('series');
        $headline->timepublished=$request->get('timepublished');
        
        $headline->save();
        return redirect()->route('headline.index')->with('success','Data Updated');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headline = headlines::find($id);
        $headline->delete();
        return redirect()->route('headline.index')->with('success','Data Deleted');
         
    }
}
