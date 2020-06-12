<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class LessonController extends Controller
{
    public function getAllCourseLessons($id){
        $course = Course::find($id);
        return response()->json($course->lessons);
    }

    public function getLessonDocs($id){
        $lesson = Lesson::find($id);
        return response()->json($lesson->docs);
    }

    public function getLessonComments($id){
        $lesson = Lesson::find($id);
        return response()->json($lesson->comments);
    }
}
