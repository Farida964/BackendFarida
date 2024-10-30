<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        $response = [
            'message' => 'Berhasil menampilkan semua data Students!',
            'data' => $student
        ];

        return response()->json($response,200);
    }

    public function store(Request $request)
    {
        $input = [
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'majority' => $request->majority,
        ];

        $students = Student::create($input);

        $response = [
            'message' => 'Berhasil membuat data Student baru!',
            'data' => $students,
        ];

        return response()->json($response, 201);
    }

    public function show($id)
    {
        // $student = Student::find($id);

        if ($student) {
            $data = [
                'message' => 'Dapatkan detail student',
                'data' => $student,
            ];

            return response()->jason($data, 200);
        } else {
            $data = [
                'message' => 'Data Student tidak ditemukan',
            ];

            return response()->jason($data, 404);
        }

##cara lain
        // $student = Student::find($id);

        // if (!$student) {
        //     return response()->json(['message' => 'Data Student tidak ditemukan!'], 404);
        // }

        // return response()->json([
        //     'message' => 'Berhasil menampilkan data Student!',
        //     'data' => $student,
        // ], 200);
    }

   
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $input = [
                'name' => $request->name ?? $student->name,
                'nim' => $request->nim ?? $student->nim,
                'email' => $request->email ?? $student->email,
                'majority' => $request->majority ?? $student->majority,
            ];

            $student->update($input);

            $data = [
                'message' => 'Student berhasil diupdate!',
                'data' => $student
            ];

            return response()->json($data, 200);
        } else {

            $data = [
                'message' => 'Tidak ada data student!'
            ];

            return response()->json($data, 404);
        }


##cara lain
        // $student = Student::find($id);

        // if (!$student) {
        //     return response()->json(['message' => 'Data Student tidak ditemukan!'], 404);
        // }

        // $student->name = $request->name;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->majority = $request->majority;
        // $student->save();

        // return response()->json([
        //     'message' => 'Berhasil mengupdate data Student!',
        //     'data' => $student,
        // ], 200);
    }

   
    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();

            $data = [
                'message' => 'Student berhasil dihapus!'
            ];

            return response()->json(data,200);
        }
        else {
            $data = [
                'message' => 'Student not found'
            ];

        return response()->json($data, 404);
        }


##cara lain
        // $student = Student::find($id);

        // if (!$student) {
        //     return response()->json(['message' => 'Data Student tidak ditemukan!'], 404);
        // }

        // $student->delete();

        // return response()->json([
        //     'message' => 'Berhasil menghapus data Student!',
        // ], 200);
    }
}
