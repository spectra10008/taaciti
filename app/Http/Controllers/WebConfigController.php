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
        $web_configs = WebConfig::all();
        $configs = [];
        foreach($web_configs as $web_config)
        {
            $configs[$web_config->key] = $web_config->value;
        }

        return view('web_configs.index')
        ->with('configs',$configs)
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
     * @param  \App\Http\Requests\StoreWebConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebConfigRequest $request)
    {
        $all_data = $request->all();
        foreach ($all_data as $key=>$single_data)
        {
            $check_data = WebConfig::where('key',$key)->first();
            if($check_data == null)
            {
                $web_configs = new WebConfig();
                $web_configs->key = $key;
                if($key == 'logo')
                {
                    if ($single_data->isValid()) {
                        $path = $single_data->store(
                            'website_logo', 'public'
                        );
                        $web_configs->value = $path;
                    }
                }else 
                {
                    $web_configs->value = $single_data;
                }
                $web_configs->save();
            }else
            {
                $check_data->key = $key;
                if($key == 'logo')
                {
                    if ($single_data->isValid()) {
                        $path = $single_data->store(
                            'website_logo', 'public'
                        );
                        $check_data->value = $path;
                    }
                }else 
                {
                    $check_data->value = $single_data;
                }
                $check_data->update();
            }
        }

        toastr()->success('Operation Completed Successfully !!');
        return back();

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
