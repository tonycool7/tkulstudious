<?php

namespace App\Http\Controllers;

use App\Mail\ProjectStarted;
use App\Projects;
use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'can:access-admin'], ['except' => ['startProject', 'store', 'projectCreated']]);
    }

    public function startProject(Request $request){
        $services = Services::all();

        return view('start_project', compact('services'));
    }

    public function projectCreated(){

        return view('project_created');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = Services::all()->pluck('name')->toArray();
        $projectData = $request->all();
        unset($projectData['upload']);

        $servicesJson = json_encode(array_intersect(array_flip($projectData), $services));
        $projectData['services'] = $servicesJson;

        if($request->hasFile('upload')){
            $projectData['file'] = $request->file('upload')->getClientOriginalName();
            $request->file('upload')->storeAs('projects', $projectData['file']);
        }

        $project = Projects::create($projectData);

        Mail::to($projectData['email'])->send(new ProjectStarted($project));
        Mail::to('dlords777@gmail.com')->send(new ProjectStarted($project));

        return redirect('/project_created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Projects::findOrFail($id);
        $pdf = PDF::loadView('projects.show', $project);

        return $pdf->stream($project->name.'.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('d');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::findOrFail($id);
        if(isset($project->file)){
            Storage::disk('public')->delete('projects/'.$project->file);
        }

        Projects::destroy($id);

        return redirect('/project')->with(['success' => 'Project deleted!']);
    }
}
