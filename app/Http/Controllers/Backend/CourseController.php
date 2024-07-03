<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    private $root = 'backend.courses.';
    public function index() {
        $courses = Course::whereNotIn('id', [1,2])->where('status', 1)->get();
        return view($this->root . 'index', ['courses' => $courses]);
    }

    public function create() {
        return view($this->root . 'create');
    }

    public function store(Request $request) {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $course = new Course();
            $course->name = $request->name;
            $course->price = $request->price;
            $course->link = $request->link;
            $course->description = $request->description;

            if($request->hasFile('thumbnail'))
                $course->thumbnail = (new MediaFile)->upload('courses/', $request->thumbnail);

            if ($course->save()) {
                return redirect()->back()->with('success', 'New course has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id) {
        $course = Course::findOrFail($id);
        return view($this->root . 'edit', ['course' => $course]);
    }

    public function update(Request $request, $id) {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $course = Course::findOrFail($id);
            $course->name = $request->name;
            $course->price = $request->price;
            $course->link = $request->link;
            $course->description = $request->description;

            if ($request->hasFile('thumbnail')) {
                if (!empty($course->thumbnail) && file_exists(public_path('storage/courses/' .  $course->thumbnail))) {
                    unlink(public_path('storage/courses/' . $course->thumbnail));
                }
                $course->thumbnail = (new MediaFile)->upload('courses/', $request->thumbnail);
            }

            if ($course->save()) {
                return redirect()->route('courses.index')->with('success', 'The course has been updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $course = Course::find($id);
            if ($course->delete()) {
                if (!empty($course->thumbnail) && file_exists(public_path('storage/courses/' .  $course->thumbnail))) {
                    unlink(public_path('storage/courses/' . $course->thumbnail));
                }
                return redirect()->back()->with('success', 'The course has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
