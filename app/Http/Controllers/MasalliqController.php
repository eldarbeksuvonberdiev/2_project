<?php

namespace App\Http\Controllers;

use App\Models\Masalliq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasalliqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Masalliq::all();
        return view('project.masalliq',['models'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Masalliq $masalliq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masalliq $masalliq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Masalliq $masalliq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masalliq $masalliq)
    {
        //
    }
}
