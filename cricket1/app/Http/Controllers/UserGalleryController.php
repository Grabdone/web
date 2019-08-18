<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pic;

class UserGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pic= pic::where('team','Pakistan')->orderBy('id','desc')->get();
        return view('user.usergallery',compact('pic'));
    }
    public function indexaus()
    {
        $pic= pic::where('team','Australia')->orderBy('id','desc')->get();
        return view('user.usergallery',compact('pic'));
    }
    public function indexeng()
    {
        $pic= pic::where('team','England')->orderBy('id','desc')->get();
        return view('user.usergallery',compact('pic'));
    }
    public function indexwind()
    {
        $pic= pic::where('team','West Indies')->orderBy('id','desc')->get();
        return view('user.usergallery',compact('pic'));
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
