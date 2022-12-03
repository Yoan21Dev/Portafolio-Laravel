<?php

namespace App\Http\Controllers\v1;


use App\Models\Course ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class PageController extends Controller
{

    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $courses = course::latest()->orderBy('id', 'desc')->paginate(10);

        return view('view-courses\index-course', [
                    'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view-courses\create-course');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;

        $course['title'] = $request->title;
        $course['description'] = $request->description;
        $course['user_id']= auth()->user()->id;
        $course->save();
        session()->flash('status', 'course successfully Created.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where('id','=',$id)->get();
        return  view('view-courses\course', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::where('id','=',$id)->get();
        return  view('view-courses\edit-course', compact('course'));
    }

    /**
     *
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->save();
        session()->flash('status', 'Course successfully updated.');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        session()->flash('status', 'Course successfully deleted.');
        return back();
    }
}
