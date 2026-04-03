<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('client')->latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $clients = Client::orderBy('nom')->get();
        return view('projects.create', compact('clients'));
    }

    public function store(StoreProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $project->load('client');
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $clients = Client::orderBy('nom')->get();
        return view('projects.edit', compact('project', 'clients'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}