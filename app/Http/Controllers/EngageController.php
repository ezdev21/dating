<?php

namespace App\Http\Controllers;

use App\Models\Engage;
use App\Http\Requests\StoreEngageRequest;
use App\Http\Requests\UpdateEngageRequest;

class EngageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEngageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEngageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Engage  $engage
     * @return \Illuminate\Http\Response
     */
    public function show(Engage $engage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Engage  $engage
     * @return \Illuminate\Http\Response
     */
    public function edit(Engage $engage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEngageRequest  $request
     * @param  \App\Models\Engage  $engage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEngageRequest $request, Engage $engage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Engage  $engage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Engage $engage)
    {
        //
    }
}
