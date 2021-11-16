<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\Support\Facades\Redirect;

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

        return view('/index',compact('calls'));
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
     * @return \Illuminate\Http\RedirectResponse
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

//        $new_user = factory(User::class)->create();
       $faker = Factory::create();

        $new_user = new User([
            'name' => $faker->name
        ]);

        $new_user->save();

        $clients = new Client([
            'name' => $request->input('name'),
            'client_type' => $request->input('client_type'),
            'user_id' => $new_user->id

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

        return Redirect::to('show/'. $call->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $call
     * @return \Illuminate\Http\Response
     */
    public function show(Call $call)
    {
        //
        return view('show', compact('call'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $call
     * @return \Illuminate\Http\Response
     */
    public function edit(Call $call)
    {
        //
        return view('edit', compact('call'));
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
     * @param  int  $call
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Call $call)
    {
        //
        $call = Call::find('id');
        $call->delete();

        return Redirect::to('/index')->with('success','Call deleted successfully');
    }
}
