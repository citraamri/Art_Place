<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumController extends Controller
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName=time().'.'.$request->image->extension();
        $request->File('image')->storeAs('/public', $imageName);
        Museum::create([
            'art_id' => $request->artId,
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $imageName,
        ]);

        return redirect('museum-create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('showmuseum');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        //
    }
}
