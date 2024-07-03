<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Countries;

class SubjectController extends Controller
{
    private $root = 'backend.subjects.';

    public function index(Request $request)
    {
        $universities = University::all();
        $countries = Countries::getList('en', 'php');
        $subjects = Subject::with(['university']);

        if (!empty($request->uni_id)) {
            $subjects = $subjects->where('university_id', $request->uni_id);
        }
        if (!empty($request->country)) {
            $subjects->whereHas('university', function ($q) use ($request) {
                $q->where('country', $request->country);
            });
        }
        $subjects = $subjects->get();

        return view($this->root . 'index', ['subjects' => $subjects, 'universities' => $universities, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            foreach ($request->names as $name) {
                if ($name != '') {
                    foreach ($request->university_ids as $university_id) {
                        $subject = new Subject();
                        $subject->name = $name;
                        $subject->university_id = $university_id;
                        $subject->comments = $request->comments;
                        $subject->save();
                    }
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'New Subject has been added');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $subject = Subject::find($id);
            $subject->name = $request->name;
            $subject->tuition_fee = $request->tuition_fee;
            $subject->university_id = $request->university_id;
            $subject->comments = $request->comments;
            if ($subject->save()) {
                DB::commit();
                return redirect()->back()->with('success', 'New Subject has been added');
            }

            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $subject = Subject::find($id);
            if ($subject->delete()) {
                return redirect()->back()->with('success', 'University has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * @api
     * @param $universityId
     */
    public function getList(Request $request)
    {
        $subjects = Subject::where('university_id', $request->university_id)->get();
        $data = [
            'subjects' => $subjects,
            'status' => 'ok',
            'code' => 200
        ];
        return response()->json($data);
    }
}
