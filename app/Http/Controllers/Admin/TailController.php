<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTailRequest;
use App\Http\Requests\UpdateTailRequest;
use App\Models\Tail;

class TailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tails=Tail::all();
        return view('admin.tails.index', compact('tails'));
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
    public function store(StoreTailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tail $tail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tail $tail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTailRequest $request, Tail $tail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tail $tail)
    {
        //
    }
}
