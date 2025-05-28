<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("project.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view("project.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->name = $data["name"];
        $newProject->type_id = $data["type_id"];
        $newProject->period = $data["period"];
        $newProject->customer = $data["customer"];
        $newProject->summary = $data["summary"];

        $newProject->save();

        return redirect()->route("project.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // dd($project->type);
        return view("project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        return view("project.edit", compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        // modifico le informazioni del progetto
        $project->name = $data["name"];
        $project->type_id = $data["type_id"];
        $project->period = $data["period"];
        $project->customer = $data["customer"];
        $project->summary = $data["summary"];

        $project->update();

        return redirect()->route("project.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("project.index");
    }
}
