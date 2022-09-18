<?php

namespace App\Http\Controllers;

use App\Models\subscribtion;
use App\Http\Requests\StoresubscribtionRequest;
use App\Http\Requests\UpdatesubscribtionRequest;

class SubscribtionController extends Controller
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
     * @param  \App\Http\Requests\StoresubscribtionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubscribtionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscribtion  $subscribtion
     * @return \Illuminate\Http\Response
     */
    public function show(subscribtion $subscribtion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribtion  $subscribtion
     * @return \Illuminate\Http\Response
     */
    public function edit(subscribtion $subscribtion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubscribtionRequest  $request
     * @param  \App\Models\subscribtion  $subscribtion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubscribtionRequest $request, subscribtion $subscribtion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribtion  $subscribtion
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscribtion $subscribtion)
    {
        //
    }
}
