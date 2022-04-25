<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionBank;

class QuestionBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qbdata=QuestionBank::all();
        if($qbdata !=null)
        {
            return response()->json([
                'status' =>true,
                'question_bank'=>$qbdata
            ]);
        }
        else{
            return response()->json([
                'qbdata' =>false,
                'question_bank' =>null
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
            'subject_id' =>'required',
            'question' =>'required',
            'option_a' =>'required',
            'option_b' =>'required',
            'option_c' =>'required',
            'option_d' =>'required',
            'right_ans' =>'required',
            
        ]);
        $qbdata=new QuestionBank();
        $qbdata->subject_id=$request->subject_id;
        $qbdata->question=$request->question;
        $qbdata->option_a=$request->option_a;
        $qbdata->option_b=$request->option_b;
        $qbdata->option_c=$request->option_c;
        $qbdata->option_d=$request->option_d;
        $qbdata->right_ans=$request->right_ans;
        
        if($qbdata->save())
        {
            return response()->json([
                'status' =>true,
                'question_bank' =>$qbdata,
                'message'=>'Question  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'question_bank'=>null
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
            'subject_id' =>'required',
            'question' =>'required',
            'option_a' =>'required',
            'option_b' =>'required',
            'option_c' =>'required',
            'option_d' =>'required',
            'right_ans' =>'required',
            
        ]);
        $qbdata=new QuestionBank();
        $qbdata->subject_id=$request->subject_id;
        $qbdata->question=$request->question;
        $qbdata->option_a=$request->option_a;
        $qbdata->option_b=$request->option_b;
        $qbdata->option_c=$request->option_c;
        $qbdata->option_d=$request->option_d;
        $qbdata->right_ans=$request->right_ans;
        
        if($qbdata->save())
        {
            return response()->json([
                'status' =>true,
                'question_bank' =>$qbdata,
                'message'=>'Question  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'question_bank'=>null
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
        $qbdata=QuestionBank::findorfail($id);
        if($qbdata->delete())
        {
            return response()->json([
                'status' =>true,
                'question_bank' =>$qbdata,
                'message' =>'Question  delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'question_bank' =>null,
            ]);
        }
    }
}
