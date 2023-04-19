<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/Frontend/Index');
    }

    /**
     * Show the home resource.
     */
    public function create()
    {
        return view('/Frontend/Pages/Index2');
    }

    /**
     * Show the blogs resource.
     */
    public function blog()
    {
        return view('/Frontend/Pages/Blog');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function blogDetails()
    {
        return view('/Frontend/Pages/BlogDetails');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
