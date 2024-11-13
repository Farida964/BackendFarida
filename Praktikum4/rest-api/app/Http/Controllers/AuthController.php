<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    
public function register(Request $request) {
    // Menangkap inputan
    $input = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ];

    // Menginsert data ke tabel user
    $user = User::create($input);

    // Menyiapkan data untuk response
    $data = [
        'message' => 'User is created successfully'
    ];

    // Mengirim response JSON
    return response()->json($data, 200);
}

public function login(Request $request) {
    // Menangkap input user
    $input = [
        'email' => $request->email,
        'password' => $request->password
    ];

    // Mengambil data user dari database berdasarkan email
    $user = User::where('email', $input['email'])->first();

    // Membandingkan input user dengan data user di database
    $isLoginSuccessfully = (
        $input['email'] == $user->email
        && Hash::check($input['password'], $user->password)
    );

    if ($isLoginSuccessfully) {
        // Membuat token
        $token = $user->createToken('auth_token');

        $data = [
            'message' => 'Login successfully',
            'token' => $token->plainTextToken
        ];

        // Mengembalikan response JSON untuk login berhasil
        return response()->json($data, 200);
    } else {
        $data = [
            'message' => 'Username or Password is wrong'
        ];

        // Mengembalikan response JSON untuk login gagal
        return response()->json($data, 401);
    }
}

}