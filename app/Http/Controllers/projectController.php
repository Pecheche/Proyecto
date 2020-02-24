<?php

namespace App\Http\Controllers;

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



    

    public function store()
    {

        Project::create( request()->all() );

        return redirect()->route('project.index');

    }


}
