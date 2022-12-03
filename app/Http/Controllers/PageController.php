<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Experience;
use App\Models\Skill;
class PageController extends Controller
{
    public function index(){
        $courses = Course::where('user_id','=',1)->get()->take(4);
        $skills = Skill::where('user_id','=',1)->get()->take(4);
        $experiences = Experience::where('user_id','=',1)->get()->take(4);

        return view('home',[
            'courses'=> $courses,
            'skills'=> $skills,
            'experiences'=> $experiences,
        ]);
    }

    public function store( Request $request){

        $post = Course::create([
            'user_id' => auth()->user()->id,
        ] + $request->all());

        return back()->with('status','creado con exito');
    }

}
