<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Request $request)
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate(5)
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','Proyecto creado con exito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project] );
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show',$project)->with('status','Proyecto actualizado con exito');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','Proyecto eliminado con exito');
    }
}
