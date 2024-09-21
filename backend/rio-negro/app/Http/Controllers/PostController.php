<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $posts = Post::all();
        return response()->json($posts);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('/images');
        $imageUrl = Storage::url($image);
        $data = $request->all();
        $data['image'] = $imageUrl;
        Post::create($data);
        return response()->json(array('err'=> false, 'msg' => 'Experiencia guardada correctamente'),200);
    }

   
}
