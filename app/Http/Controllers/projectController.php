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

            'project' => Project::find($id)

        ]);

    }





    public function create()
    {

        return view('projects.create');

    }



    

    public function store(CreateProjectRequest $request)
    {

 
        Project::create($request -> validated());

        return redirect()->route('projects.index');

    }


}
