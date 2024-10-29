<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        $data = [
            'message' => 'get all resource student',
            'data' => $student
        ];

        return response()->json($data,200);
    }

    public function store(Request $request)
    {
        $input = [
            'Nama' => $request->Nama,
            'NIM' => $request->NIM,
            'Email' => $request->Email,
            'Jurusan' => $request->Jurusan,
        ];

        $students = Student::create($input);

        $data = [
            'message' => 'Student is create success!!',
            'data' => $students,
        ];

        return response()->json($data, 200);
    }
}