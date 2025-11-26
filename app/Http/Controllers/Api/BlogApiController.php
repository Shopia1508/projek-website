<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class BlogApiController extends Controller
{
    public function index()
    {
        return response()->json(Blog::latest()->get());
    }

    public function show($slug)
    {
        return response()->json(
            Blog::where('slug', $slug)->firstOrFail()
        );
    }
}
