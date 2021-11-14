<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\Client;
use Illuminate\Http\Request;


class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $calls = Call::getCalls();

        return view('/index',compact(['calls'=>'calls']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/create_call');
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

        $request->validate([
            'duration' => 'required',
            'type_call' => 'required',
            'date' => 'required',
            'external_call_score' => 'required',
            'name' => 'required',
            'client_type' => 'required'



        ]);
        $clients = new Client([
            'name' => $request->input('name'),
            'client_type' => $request->input('client_type')

        ]);
        $clients->save();


       $call = new Call([
          'duration' => $request->input('duration'),
          'type_call' => $request->input('type_call'),
          'date' => $request->input('date'),
          'external_call_score' => $request->input('external_call_score'),
           'client_id' =>$clients->id
       ]);

      $call->save();


//        redirect()->route('index')
//            ->with('success', 'Call create successfully');   -

//        return view('/create_call');

//        return Redirect::to('calls');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Call $id)
    {
        //


        return view('/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
