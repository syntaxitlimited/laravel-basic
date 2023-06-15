<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class CrudController1 extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();
        return view('teacher.index',compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);


        Teacher::insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('crud1')->with('message','Data Insert Successfully');
    }


    public function edit($id)
    {
        $teacher = Teacher::where('id',$id)->first();
        return view('teacher.edit',compact('teacher'));
    }


    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Teacher::where('id',$request->teacher_id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('crud1')->with('message','Data Update Successfully');
    }

    public function delete($id)
    {
        Teacher::where('id', $id)->delete();
        return redirect()->route('crud1')->with('message','Item Delete successfully.');

    }
}
