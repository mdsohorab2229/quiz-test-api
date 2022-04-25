<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opdata=Option::all();
        if($opdata !=null)
        {
            return response()->json([
                'status' =>true,
                'option_list'=>$opdata
            ]);
        }
        else{
            return response()->json([
                'opdata' =>false,
                'option_list' =>null
            ]);
        }
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
        $request->validate([
            'option_a' =>'required',
            'option_b' =>'required',
            'option_c' =>'required',
            'option_d' =>'required',
            'question_bank_id' =>'required'
        ]);
        $opdata=new Option();
        $opdata->option_a=$request->option_a;
        $opdata->option_b=$request->option_b;
        $opdata->option_c=$request->option_c;
        $opdata->option_d=$request->option_d;
        $opdata->question_bank_id=$request->question_bank_id;
        if($opdata->save())
        {
            return response()->json([
                'status' =>true,
                'option_list' =>$opdata,
                'message'=>'Option  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'option_list'=>null
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([
            'option_a' =>'required',
            'option_b' =>'required',
            'option_c' =>'required',
            'option_d' =>'required',
            'question_bank_id' =>'required'
        ]);
        $opdata=Option::findorfail($id);
        $opdata->option_a=$request->option_a;
        $opdata->option_b=$request->option_b;
        $opdata->option_c=$request->option_c;
        $opdata->option_d=$request->option_d;
        $opdata->question_bank_id=$request->question_bank_id;
        if($opdata->save())
        {
            return response()->json([
                'status' =>true,
                'option_list' =>$opdata,
                'message'=>'Option  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'option_list'=>null
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opdata=Option::findorfail($id);
        if($opdata->delete())
        {
            return response()->json([
                'status' =>true,
                'option_list' =>$opdata,
                'message' =>'Option  delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'option_list' =>null,
            ]);
        }
    }
}
