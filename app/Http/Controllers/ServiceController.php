<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use App\Models\Status;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Pages.IT Service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(Status::get());
        $stauses = Status::get();
        return view('Pages.IT Service.itServiceCreate', compact('stauses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceModel $serviceModel)
    {
        //
    }
}
