<?php

namespace App\Http\Controllers;

use App\Events\FileDeletingEvent;
use App\Http\Requests\ProjectsRequest;
use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $projects = Projects::paginate();
        return view('projects.index', compact('projects'))->with('i', (request()->input('page', 1) - 1) * $projects->perPage());
    }

    public function create(): View
    {
        $project = new Projects();
        return view('projects.create', compact('project'));
    }

    public function store(ProjectsRequest $request): RedirectResponse
    {
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/img/portfolio', $fileName);
        Projects::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'url' => $request->url,
            'git_url' => $request->git_url
        ]);
        return redirect()->route('projects.index')->with('success', 'Proyecto creado satisfactoriamente');
    }

    public function show(Projects $project): View
    {
        $project = Projects::find($project->id);
        return view('projects.show', compact('project'));
    }

    public function edit(Projects $project): View
    {
        return view('projects.edit', compact('project'));
    }

    public function update(ProjectsRequest $request, Projects $id): RedirectResponse
    {
        $fileName = time() . '.' . $request->images->extension();
        $request->images->storeAs('public/images/img', $fileName);
        $id->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'url' => $request->url,
            'git_url' => $request->git_url
        ]);
        return redirect()->route('projects.index')->with('success', 'Proyecto actualizado satisfactoriamente');
    }
    public function destroy(Projects $project): RedirectResponse
    {
        FileDeletingEvent::dispatch($project);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado satisfactoriamente');
    }
}
