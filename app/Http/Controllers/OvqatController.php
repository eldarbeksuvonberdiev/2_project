<?php

namespace App\Http\Controllers;

use App\Models\Ovqat;
use App\Http\Controllers\Controller;
use App\Models\Masalliq;
use Illuminate\Http\Request;

class OvqatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Ovqat::all();
        $masalliq = Masalliq::all();
        return view('project.ovqat',['models'=> $model,'masalliqs'=>$masalliq]);
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
        $data = $request->validate([
            'name'=>'required',
            'masalliqlar'=>'required|array',
        ]);
        $ids = $request['masalliqlar'];
        unset($request['masalliqlar']);
        $ovqat = Ovqat::create($request->all());
        $ovqat->masalliqs()->attach($ids);
        return redirect()->route('ovqat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ovqat $ovqat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ovqat $ovqat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ovqat $ovqat)
    {
        $data = $request->validate([
            'name'=>'required',
            'masalliqlar'=>'required|array',
        ]);
        $ids = $request['masalliqlar'];
        unset($request['masalliqlar']);
        $ovqat->update($request->all());
        $ovqat->masalliqs()->sync($ids);
        // dd($ids,$request->all(),$ovqat->id);
        return redirect()->route('ovqat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ovqat $ovqat)
    {
        //
    }
}
