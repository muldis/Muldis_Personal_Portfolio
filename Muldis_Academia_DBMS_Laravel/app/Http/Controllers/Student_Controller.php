<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Session;
use App\Models\Student;
use Illuminate\Http\Request;

class Student_Controller extends BaseController
{
    /**
     * Display a listing of the student.
     */
    public function fetch_all()
    {
        $students = Student::all();
        return response()->json($students, 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified student.
     */
    public function fetch_one($student_sid)
    {
        // If this throws an exception due to not finding a record,
        // Laravel will return a 404 response.
        $student = Student::findOrFail($student_sid);
        return response()->json($student, 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Store a newly created student in storage.
     */
    public function create_one(Request $request)
    {
        $student = new Student();
        $this->copy_fields_from_request_to_model($student, $request);
        $student->save();
        return response()->json(['success' => 'Student record was created'], 201)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Update the specified student in storage.
     */
    public function update_one(Request $request, $student_sid)
    {
        // If this throws an exception due to not finding a record,
        // Laravel will return a 404 response.
        $student = Student::findOrFail($student_sid);
        $this->copy_fields_from_request_to_model($student, $request);
        $student->save();
        return response()->json(['success' => 'Student record was updated'], 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified student from storage.
     */
    public function remove_one($student_sid)
    {
        // If this throws an exception due to not finding a record,
        // Laravel will return a 404 response.
        $student = Student::findOrFail($student_sid);
        $student->delete();
        return response()->json(['success' => 'Student record was removed'], 200)
            ->header('Content-Type', 'application/json');
    }

    private function copy_fields_from_request_to_model(Student $student, Request $request)
    {
        $request_body = $request->json()->all();
        $student->student_name = $request_body['student_name'];
    }
}
