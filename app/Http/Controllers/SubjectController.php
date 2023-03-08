<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAcademicYears;
use App\Models\Academicyear;
use App\Models\Branch;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        $academicyears = Academicyear::all();
        return view('pages.backend.subjects.index',compact('academicyears','branches'));


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
    public function store(StoreAcademicYears $request)
    {
        $validated = $request->validated();

        {

            try {
                $academicyears = new Academicyear();
                $academicyears->name = $request->name;
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

    public function getbranches($id)
    {
        $list_branches = Branch::where("academicyear_id", $id)->pluck("name_branch", "id");
        return $list_branches;
    }
}
