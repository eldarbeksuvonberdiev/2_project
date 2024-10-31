<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::select('universities.id','universities.name')
        ->leftJoin('faculties','faculties.university_id','=','universities.id')
        ->leftJoin('fields','fields.faculty_id','=','faculties.id')
        ->leftJoin('groups','groups.field_id','=','fields.id')
        ->leftJoin('students','students.group_id','=','groups.id')
        ->groupBy('universities.id','universities.name')
        ->selectRaw('
        COUNT(DISTINCT faculties.id) AS fa_count,
        COUNT(DISTINCT fields.id) AS fi_count,
        COUNT(DISTINCT groups.id) AS g_count,
        COUNT(DISTINCT students.id) AS s_count
        ')->get();
        return view('university.index',['universities' => $universities]);
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
        $request->validate([
            'name' => 'required'
        ]);

        University::create($request->all());
        return redirect()->route('university');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $university->update($request->all());
        return redirect()->route('university');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
    }
}
