<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use App\Tag;

class ProjectsController extends Controller
{
    

    public function index(){

        if(request('tag')){

            $projects = Tag::where('name', request('tag'))->firstOrFail()->projects;

            $tags = Tag::all();

        } else {

            $projects = Project::all();

            $tags = Tag::all();

        }

        return view('projects', [
    
            'projects' => $projects,
            'tags' => $tags

        ]);

        }


        public function show($id){

            $project = Project::findOrFail($id);

            return view('show', [

                'project' => $project

            ]);

        }

  

    public function store(){

        $project = new Project();

        $project->id = request('id');

        $project->name = request('name');

        $project->description = request('description');

        $project->image = request('image')->getClientOriginalName();

        $project->link = request('link');

        $file = request('image');

        $path = $file->storeAs('public/', $project->image);

        //request('image')->store('images', 'public');

        $project->save();

        $project->tags()->attach(request('tags'));

        return redirect('/');

    }

    public function update($id){

        $project = Project::findOrFail($id);

        $project->name = request('name');
        
        $project->description = request('description');
        
        $project->image = request('image')->getClientOriginalName();
        
        $project->link = request('link');

        $file = request('image');

        $path = $file->storeAs('public/', $project->image);

        $project->save();

        return redirect('/');

    }

    public function edit($id){

        $project = Project::findOrFail($id);

        return view('edit', compact('project'));

    }

    public function destroy($id){

        $project = Project::findOrFail($id);

        $project->delete();

        return redirect('/progetti');
        
    }
}
