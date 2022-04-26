<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizCreate;
class QuizCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qcdata=QuizCreate::with('questionBank','quizList')->get();
        if($qcdata !=null){
            return response()->json([
                'status' =>true,
                'quiz_create_list'=>$qcdata
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'quiz_create_list' =>null
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
            'question_bank_id' =>'required',
            'quiz_list_id' =>'required'
        ]);
        $qcdata=new QuizCreate();
       
        $qcdata->question_bank_id=$request->question_bank_id;
        $qcdata->quiz_list_id=$request->quiz_list_id;
        if($qcdata->save())
        {
            return response()->json([
                'status' =>true,
                'quiz_create_list' =>$qcdata,
                'message'=>'Quiz Create save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'quiz_create_list'=>null
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
            'question_bank_id' =>'required',
            'quiz_list_id' =>'required'
        ]);

        $qcdata=QuizCreate::findorfail($id);
        $qcdata->question_bank_id=$request->question_bank_id;
        $qcdata->quiz_list_id=$request->quiz_list_id;
        if($qcdata->save())
        {
            return response()->json([
                'status' =>true,
                'quiz_create_list' =>$qcdata,
                'message'=>'Quiz Create Update success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'quiz_create_list'=>null
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
        $qcdata=QuizCreate::findorfail($id);
        if($qcdata->delete())
        {
            return response()->json([
                'status' =>true,
                'quiz_create_list' =>$qcdata,
                'message' =>'Quiz Create delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'quiz_create_list' =>null
            ]);
        }  
    }
}
