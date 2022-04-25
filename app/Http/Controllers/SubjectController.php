<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subdata=Subject::all();
        if($subdata !=null)
        {
            return response()->json([
                'status' =>true,
                'subject_list' => $subdata
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'subject_list' =>null
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
            'name' =>'required',
        ]);
        $subdata=new Subject();
        $subdata->name=$request->name;
        if($subdata->save())
        {
            return response()->json([
                'status' =>true,
                'subject_list' =>$subdata,
                'message'=>'Subject save success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'student_info'=>null
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
            'name' =>'required',
        ]);
        $subdata=Subject::findorfail($id);
        $subdata->name=$request->name;
        if($subdata->save())
        {
            return response()->json([
                'status' =>true,
                'subject_list' =>$subdata,
                'message'=>'Subject Update success fully'
            ]);
        }
        else{
            return response()->json([
                'status'=>false,
                'student_info'=>null
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
        $subdata=Subject::findorfail($id);
        if($subdata->delete())
        {
            return response()->json([
                'status' =>true,
                'subject_list' =>$subdata,
                'message' =>'Subject delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'subject_list' =>null
            ]);
        }
    }
}
