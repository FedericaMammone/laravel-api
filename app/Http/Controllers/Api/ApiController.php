<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ApiController extends Controller
{
    public function projectsIndex()
    {

        $projects = Project::all();

        return response()->json([
            'projects' => $projects
        ]);
    }

    public function projectIndexPage()
    {

        $projects = Project::paginate(10);

        return response()->json([
            'projects' => $projects
        ]);
    }
}
