<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebConfigRequest;
use App\Http\Requests\UpdateWebConfigRequest;
use App\Models\WebConfig;

class WebConfigController extends Controller
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
     * @param  \App\Http\Requests\StoreWebConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function show(WebConfig $webConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(WebConfig $webConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebConfigRequest  $request
     * @param  \App\Models\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebConfigRequest $request, WebConfig $webConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebConfig $webConfig)
    {
        //
    }
}
