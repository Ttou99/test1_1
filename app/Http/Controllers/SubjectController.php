<?php

namespace App\Http\Controllers;

use App\Models\Academicyear;
use App\Models\Branch;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('pages.backend.subjects.index',compact('subjects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicyears = Academicyear::all();
        $branches = Branch::all();
        return view('pages.backend.subjects.create', compact('academicyears','branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {

            try {
                $academicyears = new Academicyear();
                $academicyears->name = $request->name;
                $academicyears->email = $request->email;
                $academicyears->password = Hash::make($request->password);
                $academicyears->address = $request->address;
                $academicyears->gender_id = $request->gender_id;
                $academicyears->joining_date = $request->joining_date;
                $academicyears->phone = $request->phone;
                $academicyears->save();

                return redirect()->route('subjects.index');

            }

            catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
