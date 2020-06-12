<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use Auth;
class CourseController extends Controller
{
    public function index(){    
        return view('main.dashboard');
    }

    public function get_user_data(){
        
        return response()->json([

            'user' => Auth::user()->name

        ]);
    }

    public function addCourseIndex(){
        
        return view('main.add-course');
    }

    public function addCourse(Request $request)
    {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $user_id = Auth::user()->id;
        if(is_null($request->course_price)){
            $price = 0;
        } else {
            $price = $request->course_price;
        }
        $course = new Course();
        $course->course_name = $request->course_name;
        $course->course_desc = $request->about;
        $course->course_img = $imageName;
        $course->price = $price;
        $course->level = $request->level;
        $course->user_id = $user_id;
        $course->subject_id = $request->subject;
        $course->save();

    	return response()->json([$request->price]);
    }
}
