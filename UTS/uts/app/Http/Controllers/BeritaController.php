<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        ## handle jika data tidak ada
        $beritas = Berita::all();

        if ($beritas->isNotEmpty()) {
            $response = [
                'message' => 'Get All Resource:',
                'data' => $beritas
            ];
    
            return response()->json($response, 200);
        } else {
            return response()->json([
                'message' => 'Data is empty'
            ], 404);
        }

    }

    
    public function store(Request $request)
    {
        //validasi otomatis
        $validateData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'url' => 'required|string',
            'url_image' => 'required|string',
            'published_at' => 'required|date',
            'category' => 'required|string',
        ]);

        $beritas = Berita::create($validateData);

        $data = [
            'message' => 'Resource is added successfully',
            'data' => $beritas
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {

        if ($beritas) {
            $data = [
                'message' => 'Get Detail Resource',
                'data' => $beritas,
            ];

            return response()->jason($data, 200);
        } else {
            $data = [
                'message' => 'Resource not found',
            ];

            return response()->jason($data, 404);
        }

    }

   
    public function update(Request $request, $id)
    {
        $beritas = Berita::find($id);
        if ($beritas) {
            $input = [
                'title' => $request->title ?? $beritas->title,
                'author' => $request->author ?? $beritas->author,
                'description' => $request->description ?? $beritas->description,
                'content' => $request->content ?? $beritas->content,
                'url' => $request->url ?? $beritas->url,
                'url_image' => $request->url_image ?? $beritas->url_image,
                'published_at' => $request->published_at ?? $beritas->published_at,
                'category' => $request->category ?? $beritas->category,
            ];

            $beritas->update($input);

            $data = [
                'message' => 'Resource is update succesfully',
                'data' => $beritas
            ];

            return response()->json($data, 200);
        } else {

            $data = [
                'message' => 'Resource not found'
            ];

            return response()->json($data, 404);
        }

    }

    public function destroy($id)
    {
        $beritas = Berita::find($id);

        if ($beritas) {
            $beritas->delete();

            $data = [
                'message' => 'Resource is delete successfully'
            ];

            return response()->json($data,200);
        }
        else {
            $data = [
                'message' => 'Resource not found'
            ];

        return response()->json($data, 404);
        }
    }




////

    public function search(Request $request)
    {
        $title = $request->query('title');
    
        if ($beritas->isNotEmpty()) {
            return response()->json([
                'message' => 'Get searched resource',
                'total' => $beritas->count(),  // Adding total count of the results
                'data' => $beritas
            ], 200);
        } else {
            return response()->json([
                'message' => 'Resource not found',
                'total' => 0, 
            ], 404);
        }
    }

    public function getSportResource()
    {
        if ($beritas->isNotEmpty()) {

            return response()->json([
                'message' => 'Get sport resource',
                'total' => $beritas->count(), 
                'data' => $beritas
            ], 200);
        } else {
            return response()->json([
                'message' => 'No sport resources found',
                'total' => 0, 
            ], 404);
        }
    }

    public function getFinanceResource()
    {
        if ($beritas->isNotEmpty()) {
            return response()->json([
                'message' => 'Get finance resource',
                'total' => $beritas->count(), 
                'data' => $beritas
            ], 200);
        } else {
            return response()->json([
                'message' => 'No finance resources found',
                'total' => 0, 
            ], 404);
        }
    }

    public function getAutomotiveResource()
    {
        if ($beritas->isNotEmpty()) {
            return response()->json([
                'message' => 'Get automotive resource',
                'total' => $beritas->count(),  
                'data' => $beritas
            ], 200);
        } else {
            return response()->json([
                'message' => 'No automotive resources found',
                'total' => 0, 
            ], 404);
        }
    }

 }