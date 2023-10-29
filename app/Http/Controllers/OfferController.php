<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::orderby('id','Desc')->get();

        return view('offers.index')
        ->with('offers',$offers)
        ;
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
     * @param  \App\Http\Requests\StoreOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfferRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $path = $request->file('image')->store(
                    'offers', 'public'
                );
                $input['image'] = $path;
            }
        }
        $offer = Offer::Create($input);

        toastr()->success('تم حفظ البيانات بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('offers.edit')
        ->with('offer',$offer)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $path = $request->file('image')->store(
                    'offers', 'public'
                );
                $input['image'] = $path;
            }
        }
        $offer->update($input);

        toastr()->success('تم تحديث البيانات بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        Storage::disk('public')->delete($offer->image);
        $offer->delete();
        toastr()->success('تم حذف البيانات بنجاح !!');
        return back();
    }
}
