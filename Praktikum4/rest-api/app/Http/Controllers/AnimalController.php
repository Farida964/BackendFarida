<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Property animals sebagai array
    public $animals = [];

    // Constructor untuk mengisi data awal
    public function __construct()
    {
        $this->animals = ['Ayam', 'Ikan'];
    }

    // Method index untuk menampilkan data animals
    public function index()
    {
        return response()->json([
            'message' => 'Menampilkan seluruh hewan',
            'data' => $this->animals
        ]);
    }

    // Method store untuk menambahkan hewan baru
    public function store(Request $request)
    {
        $newAnimal = $request->input('animal');
        array_push($this->animals, $newAnimal);

        return response()->json([
            'message' => "Hewan baru ($newAnimal) ditambahkan",
            'data' => $this->animals
        ]);
    }

    // Method update untuk mengupdate hewan berdasarkan index
    public function update(Request $request, $index)
    {
        $updatedAnimal = $request->input('animal');
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $updatedAnimal;
            return response()->json([
                'message' => "Hewan di index $index diupdate",
                'data' => $this->animals
            ]);
        } else {
            return response()->json([
                'message' => 'Index tidak ditemukan',
            ], 404);
        }
    }

    // Method destroy untuk menghapus hewan berdasarkan index
    public function destroy($index)
    {
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            // Reindex array
            $this->animals = array_values($this->animals);
            return response()->json([
                'message' => "Hewan di index $index dihapus",
                'data' => $this->animals
            ]);
        } else {
            return response()->json([
                'message' => 'Index tidak ditemukan',
            ], 404);
        }
    }
}