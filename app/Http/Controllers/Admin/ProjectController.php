<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
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
        // prendo i type
        $types = Type::all();

        // prendo le technology
        $technologies = Technology::all();

        return view("project.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dd($data);

        $newProject = new Project();

        $newProject->name = $data["name"];
        $newProject->type_id = $data["type_id"];
        $newProject->period = $data["period"];
        $newProject->customer = $data["customer"];
        $newProject->summary = $data["summary"];

        $newProject->save();

        // dopo aver salvato il progetto

        // verifico se sto ricevendo le technologies
        if ($request->has("technologies")) {

            // sincronizzo le technologies della tabella pivot
            $newProject->technologies()->sync($data["technologies"]);
        }

        return redirect()->route("project.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // dd($project->technologies);
        return view("project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // prendo il type
        $types = Type::all();

        // prendo le technology
        $technologies = Technology::all();

        return view("project.edit", compact("project", "types", "technologies"));
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

        // verifico se sto ricevendo le technologies
        if ($request->has("technologies")) {

            // sincronizzo le technologies della tabella pivot
            $project->technologies()->sync($data["technologies"]);
        } else {
            // se non ricevo delle technologies, allora elimino tutte quelle collegate a questo progetto
            $project->technologies()->detach();
        }

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
