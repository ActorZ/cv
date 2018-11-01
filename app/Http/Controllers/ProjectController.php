<?php

namespace App\Http\Controllers;

use App\Admin\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectsRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);

        return view('admin.projects')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectsRequest $request)
    {
        if(!empty($request->image)){
        $originalname = $request->image->getClientOriginalName();
        
        
        $slika = $request->image;
        $slika->move('images',$originalname);
        
//dd($request->all());
        $page = Project::create(array_merge($request->input(), ['image' => $originalname])
            //$request->input()
           
        );
      }else{
        $page = Project::create(
            $request->input() 
        );
      }
       

        if($page->wasRecentlyCreated){
        flash('New project created');
        }else{
         flash('That title already exist')->error();  
         return redirect()->back(); 
        }

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects_single')->with('project',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
         return view('admin.projects_edit')->with('project',$project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectsRequest $request, Project $project)
    {
        if(!empty($request->image)){
            $originalname = $request->image->getClientOriginalName();
         
            $slika = $request->image;
            $slika->move('images',$originalname);

            $project->update(array_merge($request->input(), ['image' => $originalname])
            //$request->input()
           
            );
        }else{
         clean($project->update(
            $request->input()
         ));
        }
        flash('Project updated');

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        flash('Project deleted');

         return redirect()->route('projects.index');
    }
}
