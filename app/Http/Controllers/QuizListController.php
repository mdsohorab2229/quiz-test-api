<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizList;
class QuizListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qldata=QuizList::all();
        if($qldata !=null)
        {
            return response()->json([
                'status' =>true,
                'quiz_list'=>$qldata
            ]);
        }
        else{
            return response()->json([
                'qldata' =>false,
                'quiz_list' =>null
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
            'title' =>'required',
            'subject_id' =>'required',
            'per_question_mark' =>'required',
            'total_mark' =>'required',
            'total_quetion' =>'required'
            
        ]);
        $qldata=new QuizList();
        $qldata->title=$request->title;
        $qldata->subject_id=$request->subject_id;
        $qldata->per_question_mark=$request->per_question_mark;
        $qldata->total_mark=$request->total_mark;
        $qldata->total_quetion=$request->total_quetion;
        if($qldata->save())
        {
            return response()->json([
                'status' =>true,
                'quiz_list' =>$qldata,
                'message'=>'Quiz List  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'quiz_list'=>null
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
            'title' =>'required',
            'subject_id' =>'required',
            'per_question_mark' =>'required',
            'total_mark' =>'required',
            'total_quetion' =>'required'
            
        ]);
        $qldata=QuizList::findorfail($id);
        $qldata->title=$request->title;
        $qldata->subject_id=$request->subject_id;
        $qldata->per_question_mark=$request->per_question_mark;
        $qldata->total_mark=$request->total_mark;
        $qldata->total_quetion=$request->total_quetion;
        if($qldata->save())
        {
            return response()->json([
                'status' =>true,
                'quiz_list' =>$qldata,
                'message'=>'Quiz List  save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'quiz_list'=>null
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
        $qldata=QuizList::findorfail($id);
        if($qldata->delete())
        {
            return response()->json([
                'status' =>true,
                'quiz_list' =>$qldata,
                'message' =>'Quiz List  delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'quiz_list' =>null,
            ]);
        }
    }
}
