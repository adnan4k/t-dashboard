<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SectionController extends Controller
{
    //
    public function getHomeDestinations()
    {
        $sections = Section::orderBy('id', 'desc')
            ->where('type', 'destination')
            ->select('id', 'title', 'image')
            ->take(5)
            ->get();
        return response()->json([
            'data' => $sections,
            'message' => 'success',
            'status' => 200
        ]);
    }

    public function getAllDestionations()
    {
        $sections = Section::orderBy('id', 'desc')
            ->where('type', 'destination')
            ->select('id', 'title', 'content', 'image')
            ->get();
        return response()->json([
            'data' => $sections,
            'message' => 'success',
            'status' => 200
        ]);
    }

    public function getHomePackages()
    {
        $sections = Section::orderBy('id', 'desc')
            ->where('type', 'package')
            ->select('id', 'title', 'content', 'image')
            ->take(3)
            ->get();
        return response()->json([
            'data' => $sections,
            'message' => 'success',
            'status' => 200
        ]);
    }

    public function getPackages()
    {
        $sections = Section::orderBy('id', 'desc')
            ->where('type', 'package')
            ->select('id', 'title', 'content', 'image')
            ->get();
        return response()->json([
            'data' => $sections,
            'message' => 'success',
            'status' => 200
        ]);
    }
}
