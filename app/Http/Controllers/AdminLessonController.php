<?php

namespace App\Http\Controllers;

use App\DataTables\AdminLessonDataTable;
use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdminLessonDataTable $dataTable)
    {
        return $dataTable->render('admin-lesson.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Course::all();
        
        return view('admin-lesson.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $data['creator']=auth()->user()->name;
        Lesson::create($data);

        return redirect()->route('admin-lesson.index')->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
