<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB as FacadesDB;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('projects.index', [

            'projects' => Project::latest()->paginate()

        ]);
    }





    public function show($id)
    {

        return view('projects.show', [

            'project' => Project::findOrFail($id)

        ]);

    }





    public function create()
    {

        return view('projects.create', [

            'project' => new Project

        ]);

    }



    

    public function store(CreateProjectRequest $request)
    {

 
        Project::create($request -> validated());

        return redirect()->route('projects.index');

    }





    public function edit(Project $project)
    {

        return view('projects.edit', [

            'project' => $project

        ]);

    }





    public function update(Project $project, CreateProjectRequest $request)
    {

        $project->update($request->validated() );

        return redirect()->route('projects.index', $project);

    }

}
