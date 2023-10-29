<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;
use App\Models\PaymentMethod;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::orderby('id','Desc')->get();

        return view('payment_methods.index')
        ->with('paymentMethods',$paymentMethods)
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
     * @param  \App\Http\Requests\StorePaymentMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentMethodRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('icon')) {
            if ($request->file('icon')->isValid()) {
                $path = $request->file('icon')->store(
                    'payment_method', 'public'
                );
                $input['icon'] = $path;
            }
        }
        $paymentMethods = PaymentMethod::Create($input);
        toastr()->success('تم حفظ البيانات بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        return view('payment_methods.edit')
        ->with('paymentMethod',$paymentMethod)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentMethodRequest  $request
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod)
    {
        $input = $request->all();
        if ($request->hasFile('icon')) {
            if ($request->file('icon')->isValid()) {
                $path = $request->file('icon')->store(
                    'payment_method', 'public'
                );
                $input['icon'] = $path;
            }
        }

        $paymentMethod->update($input);
        toastr()->success('تم تعديل البيانات بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        $check_order = Order::where('method_id',$paymentMethod->id)->first();
        if($check_order != null)
        {
            toastr()->error('لا يمكنك حذف طريقة الدفع ، الطريقة مرتبطة بعدة طلبات !!');
            return back();
        }
        Storage::disk('public')->delete($paymentMethod->icon);
        $paymentMethod->delete();
        toastr()->success('تم حذف البيانات بنجاح !!');
        return back();
    }
}
