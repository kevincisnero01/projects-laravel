<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }


    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }
}
