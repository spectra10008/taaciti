<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductFileRequest;
use App\Http\Requests\UpdateProductFileRequest;
use App\Models\ProductFile;

class ProductFileController extends Controller
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
     * @param  \App\Http\Requests\StoreProductFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductFile  $productFile
     * @return \Illuminate\Http\Response
     */
    public function show(ProductFile $productFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductFile  $productFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductFile $productFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductFileRequest  $request
     * @param  \App\Models\ProductFile  $productFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductFileRequest $request, ProductFile $productFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductFile  $productFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductFile $productFile)
    {
        //
    }
}
