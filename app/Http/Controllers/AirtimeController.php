<?php

namespace App\Http\Controllers;

use App\Airtime;
use Illuminate\Http\Request;
use App\Http\Requests\AirtimeRequest;

use Gathuku\Mpesa\Facades\Mpesa;
//use Gathuku\Mpesa\Mpesa;
class AirtimeController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('index');
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
     * @param  \App\Airtime  $airtime
     * @return \Illuminate\Http\Response
     */
    public function show(Airtime $airtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airtime  $airtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Airtime $airtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airtime  $airtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airtime $airtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airtime  $airtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airtime $airtime)
    {
        //
    }



    public function confirm(AirtimeRequest $request)
    {

        $saf = $request->get('saf');#request()->except(['_token','_method']);
        $airtel = $request->get('airtel');
        $amount = $request->get('amount');


        return view('confirm',compact('saf','airtel','amount'));
    }

    public function payment(Request $request)
    {

        $saf = $request->get('saf');#request()->except(['_token','_method']);
        $airtel = $request->get('airtel');
        $amount = $request->get('amount');

//        $expressResponse=Mpesa::express(10,'254729790289','24242524','Testing Payment');
        return view('payment',compact('amount'));
    }
}
