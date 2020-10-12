<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;

class SkillsController extends Controller
{
    
    public function index(){


        $skills = Skill::all();

        return view('skills', [

            'skills' => $skills

        ]);
    }

    public function store(){

        $skill = new Skill();

        $skill->icon = request('icon')->getClientOriginalName();

        $file = request('icon');

        $path = $file->storeAs('public/', $skill->icon);

        $skill->name = request('name');

        $skill->save();

        return redirect('/');

    }
}
