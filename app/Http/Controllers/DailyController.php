<?php

namespace App\Http\Controllers;

use App\Daily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      //
        $dailies = DB::table('dailies')->get(); 
        if(!isset($dailies)){
            dd('sem registros');
        }
        return view('list_daily', ['dailies' =>$dailies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_daily');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = Auth::user()->id;
        //$meu_id = 2;
        // pegando o dia de hoje
        //$date=date('Y.m.d');
        //$date = str_replace(".","-",$date);


        // pegando os dailies de hoje e desse user
        //$dailies = DB::table('dailies')->where('created_at', '=', $date)->where('user_id', $meu_id)->get(); 

        //if($dailies == null){
          //  return Redirect::back()->withErrors(['msg', 'O daily ja foi preenchido hoje']);
        //}
        //else{ 

            //dd('oi');
            $daily = new Daily;
            $daily->first_answer = $request->primresp;
            $daily->second_answer = $request->segunresp;
            $daily->third_answer = $request->tercresp;


            $daily->user_id = $user_id;

            $daily->save();

            return redirect()->route('list');
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function show(Daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $daily = Daily::find($id);
        //dd($daily);
        return view('edit_daily', compact('daily'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $daily = Daily::find($id);
        $daily->first_answer = $request->primresp;
        $daily->second_answer = $request->segunresp;
        $daily->third_answer = $request->tercresp;

        $daily->save();

        return redirect()->route('list');

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Daily::where('id', $id)->delete();

        

        return redirect()->route('list');
        //
    }

    public function mylist(){

        $user_id = Auth::user()->id;


        $dailies = DB::table('dailies')->where('user_id', $user_id)->get(); 
        if(!isset($dailies)){
            dd('sem registros');
        }
        return view('list_daily', ['dailies' =>$dailies]);
    }
}
