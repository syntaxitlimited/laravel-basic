<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('crud.index',compact('students'));
    }

    public function edit($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        return view('crud.edit',compact('student'));
    }

    public function delete($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('crud');

    }


    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);


        DB::table('students')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('crud')->with('message','Data Insert Successfully');
    }


    public function update(Request $request)
    {
        DB::table('students')->where('id',$request->student_id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('crud')->with('message','Data Update Successfully');
    }
}
