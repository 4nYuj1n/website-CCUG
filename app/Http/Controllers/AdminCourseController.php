<?php

namespace App\Http\Controllers;

use App\DataTables\AdminCourseDataTable;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdminCourseDataTable $dataTable)
    {
        return $dataTable->render('admin-course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $image = $request->file('gambar');
        $nama_image = rand() . $image->getClientOriginalName();
        $image->storeAs('public/gambar', $nama_image);

        $data = $request->all();
        $data['gambar'] = $nama_image;
        $data['creator'] = auth()->user()->name;
        Course::create($data);
        return redirect()->route('admin-course.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $data=Course::find($id);
        return view('admin-course.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $user=Course::find($id);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension(); // Get the file extension
            $nama_image = time() . '_' . uniqid() . '.' . $extension;

            // Move the uploaded file to the storage location
            $image->storeAs('public/gambar', $nama_image);

            // Update the profile field with the new filename
            $user->update(['gambar' => $nama_image]);
        }

        // Update other fields based on the request
        $user->update($request->except('gambar'));
        return redirect()->route('admin-course.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
