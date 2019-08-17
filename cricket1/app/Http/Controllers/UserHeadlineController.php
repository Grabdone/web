<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\headlines;

class UserHeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headlines= headlines::all()->sortByDesc("id");
        return view('user.userheadlines',compact('headlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmen()
    {
        $headlines= headlines::where('series','Icc Men')->orderBy('id','desc')->get();
        return view('user.userheadlines',compact('headlines'));
    }
    public function indexbbl()
    {
        $headlines= headlines::where('series','Big Bash')->orderBy('id','desc')->get();
        return view('user.userheadlines',compact('headlines'));
    }
    public function indexpsl()
    {
        $headlines= headlines::where('series','PSL')->orderBy('id','desc')->get();
        return view('user.userheadlines',compact('headlines'));
    }
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
