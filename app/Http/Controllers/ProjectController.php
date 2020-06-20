<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }
    public function show(Project $project)
    {
        /*return $id;*/
        return view('projects/show',[
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store()
    {

        Project::create(request()->all());

        return redirect()->route('projects.index');

    }
}
