<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $education = Education::get();
        return view('admin.education.index', compact('education'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $education = Education::create($request->all());
        return redirect()->route("education.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $education = Education::findorfail($id);
        return view('admin.education.update', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $education = Education::findorfail($id)->update($request->all());
        return redirect()->route("education.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $education = Education::findorfail($id)->delete();
        return redirect()->route("education.index");
    }
}
