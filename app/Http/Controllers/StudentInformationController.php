<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInformation;

class StudentInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stdata=StudentInformation::all();
        if($stdata !=null)
        {
            return response()->json([
                'status' =>true,
                'student_info'=>$stdata
            ]);
        }
        else{
            return response()->json([
                'stdata' =>false,
                'student_info' =>null
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
            'phone' =>'required|max:11',
            'email' =>'required|email',
            'password' =>'required'
        ]);
        $stdata=new StudentInformation();
        $stdata->name=$request->name;
        $stdata->phone=$request->phone;
        $stdata->email=$request->email;
        $stdata->password=$request->password;
        if($stdata->save())
        {
            return response()->json([
                'status' =>true,
                'student_info' =>$stdata,
                'message'=>'Student Information save success fully'
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
            'phone' =>'required|max:11',
            'email' =>'required|email',
            'password' =>'required'
        ]);

        $stdata=StudentInformation::findorfail($id);
        $stdata->name=$request->name;
        $stdata->phone=$request->phone;
        $stdata->email=$request->email;
        $stdata->password=$request->password;
        if($stdata->save())
        {
            return response()->json([
                'status' =>true,
                'student_info' =>$stdata,
                'message'=>'Student Information update success fully'
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
        $stdata=StudentInformation::findorfail($id);
        if($stdata->delete())
        {
            return response()->json([
                'status' =>true,
                'student_info' =>$stdata,
                'message' =>'Student Information delete success fully'
            ]);
        }
        else{
            return response()->json([
                'status' =>false,
                'student_info' =>null,
               
            ]);
        }
    }
}
