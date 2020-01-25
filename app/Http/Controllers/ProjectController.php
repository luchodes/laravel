<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

// use DB;

class ProjectController extends Controller
{

    public function index()
    {
        // $portfolio = DB::table('projects')->get();

        // $portfolio = Project::orderBy('created_at', 'DESC')->get(); //importamos el modelo que creamos en el proyecto...eloquent

        // $projects = Project::latest()->paginate(2);

        // return view('portfolio', compact('projects'));

        return view('projects.index', [

            'projects' => Project::latest()->paginate()
        ]);

    }

    public function show($id)
    {

        return view('projects.show',[
            'project' => Project::findOrFail($id)
        ]);
    }

}
