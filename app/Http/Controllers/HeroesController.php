<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Heroes = Heroes::all();
        return $Heroes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Heroes = new Heroes();
        $Heroes->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        return $heroes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heroes $heroes)
    {
        $heroes->delete();
    }
}
