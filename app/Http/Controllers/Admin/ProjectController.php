<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use illuminate\Validation\Rule;
use App\Models\Type;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(3);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.projects.create', compact('types'));
    }


    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        if (!$request->filled('type_id')) {
            // Imposta un valore di default per type_id
            $data['type_id'] = 1; // Imposta l'ID del tipo di progetto di default
        }

        $data['type_id'] = $request->input('type_id');
        $slug = Str::slug($data['title'], '-');
        $data['slug'] = $slug;
        $project = Project::create($data);


        return redirect()->route('admin.projects.show', $project->slug);
    }


    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }


    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['type_id'] = $request->input('type_id');
        $slug = Str::slug($data['title'], '-');
        $data['slug'] = $slug;

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->slug);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('message', 'Project deleted successfully.');
    }
}