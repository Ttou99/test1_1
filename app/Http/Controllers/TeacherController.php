<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;




class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.backend.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        return view('pages.backend.teachers.create', compact('genders'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $teachers = new Teacher();
            $teachers->name = $request->name;
            $teachers->email = $request->email;
            $teachers->password = Hash::make($request->password);
            $teachers->address = $request->address;
            $teachers->gender_id = $request->gender_id;
            $teachers->joining_date = $request->joining_date;
            $teachers->phone = $request->phone;
            $teachers->save();

            return redirect()->route('teachers.index');

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genders = Gender::all();
        $teachers =  Teacher::findOrFail($id);
        return view('pages.backend.teachers.edit', compact('teachers','genders'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $teachers = Teacher::findorfail($request->id);
            $teachers->name = $request->name;
            $teachers->email = $request->email;
            $teachers->password = Hash::make($request->password);
            $teachers->address = $request->address;
            $teachers->gender_id = $request->gender_id;
            $teachers->joining_date = $request->joining_date;
            $teachers->phone = $request->phone;
            $teachers->save();
            return redirect()->route('teachers.index');
        }

        catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        try {
            $teacher->delete();
            return redirect()->route('teachers.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
