<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectsRequest;
use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function index(): View
    {
        $projects = Projects::paginate();
        return view('projects.index', compact('projects'))->with('i', (request()->input('page', 1) - 1) * $projects->perPage());
    }

    public function create(): View
    {
        $projects = new Projects();
        return view('projects.create', compact('projects'));
    }

    public function store(ProjectsRequest $request): RedirectResponse
    {
        $fileName = time() . '.' . $request->images->extension();
        $request->images->storeAs('public/images/img', $fileName);
        Projects::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'url' => $request->url
        ]);
        return redirect()->route('projects.index')->with('success', 'Proyecto creado satisfactoriamente');
    }

    public function show(Projects $id): View
    {
        $projects = Projects::find($id);
        return view('projects.show', compact('projects'));
    }

    public function edit(Projects $id): View
    {
        $projects = Projects::find($id);
        return view('projects.edit', compact('projects'));
    }

    public function update(ProjectsRequest $request, Projects $id): RedirectResponse
    {
        $fileName = time() . '.' . $request->images->extension();
        $request->images->storeAs('public/images/img', $fileName);
        $id->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'url' => $request->url
        ]);
        return redirect()->route('projects.index')->with('success', 'Proyecto actualizado satisfactoriamente');
    }
    public function destroy(Projects $id): RedirectResponse
    {
        $id->delete();
        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado satisfactoriamente');
    }
}
