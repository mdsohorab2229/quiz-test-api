<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StartQuiz;
class StartQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sqdata=StartQuiz::all();
        if($sqdata !=null)
        {
            return response()->json([
                'status' =>true,
                'start_quiz' => $sqdata
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'start_quiz' =>null
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
            'student_id' =>'required',
            'quiz_create_id' =>'required',
            'wrong_ans' =>'required',
            'right_ans' =>'required',
        ]);
        $sqdata=new StartQuiz();
        $sqdata->student_id=$request->student_id;
        $sqdata->quiz_create_id=$request->quiz_create_id;
        $sqdata->wrong_ans=$request->wrong_ans;
        $sqdata->right_ans=$request->right_ans;
        if($sqdata->save())
        {
            return response()->json([
                'status' =>true,
                'start_quiz' =>$sqdata,
                'message'=>'Start Quiz save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'start_quiz'=>null
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
            'student_id' =>'required',
            'quiz_create_id' =>'required',
            'student_id' =>'required',
            'student_id' =>'required',
        ]);

        $sqdata=StartQuiz::findorfail($id);
        $sqdata->student_id=$request->student_id;
        $sqdata->quiz_create_id=$request->quiz_create_id;
        $sqdata->wrong_ans=$request->wrong_ans;
        $sqdata->right_ans=$request->right_ans;
        if($sqdata->save())
        {
            return response()->json([
                'status' =>true,
                'start_quiz' =>$sqdata,
                'message'=>'Start Quiz update success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'start_quiz'=>null
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
        $sqdata=StartQuiz::findorfail($id);
        if($sqdata->delete())
        {
            return response()->json([
                'status' =>true,
                'start_quiz' =>$sqdata,
                'message' =>'Start Quiz delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'start_quiz' =>null
            ]);
        }
    }
}
