<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\StaffUniversity;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StaffUniversityController extends Controller
{
    private $root = 'backend.staff_universities.';

    public function index()
    {
        $staffs = User::role('Staff')->get();
        $universities = University::all();
        $assignedUniversities = StaffUniversity::with(['user', 'university'])->get();
        
        $userUniversityData = [];
        foreach ($assignedUniversities as $assignment) {
            $userId = $assignment->user_id;
            // If the user ID is not already in the array, initialize an empty array
            if (!isset($userUniversityData[$userId])) {
                $userUniversityData[$userId] = [
                    'user' => $assignment->user,
                    'universities' => [],
                ];
            }
            // Add the university ID to the user's universities array
            $userUniversityData[$userId]['universities'][] = $assignment->university;
        }

        return view($this->root . 'index', ['userUniversityData' => $userUniversityData, 'staffs' => $staffs, 'universities' => $universities]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'user_id' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            foreach ($request->university_ids as $university_id) {
                $subject = new StaffUniversity();
                $subject->user_id = $request->user_id;
                $subject->university_id = $university_id;
                $subject->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Universities have been assigned to this staff');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id)
    {
        $staffs = User::role('Staff')->get();
        $universities = University::all();
        $assignedUniversities = StaffUniversity::with(['user', 'university'])->where('user_id', $id)->pluck('university_id')->toArray();
        return view($this->root . 'edit', ['currentStaff' => $id, 'assignedUniversities' => $assignedUniversities, 'staffs' => $staffs, 'universities' => $universities]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'user_id' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $assignedUniversities = StaffUniversity::where('user_id', $id)->get();
            foreach($assignedUniversities as $assignee) {
                $assignee->delete();
            }

            foreach ($request->university_ids as $university_id) {
                $subject = new StaffUniversity();
                $subject->user_id = $request->user_id;
                $subject->university_id = $university_id;
                $subject->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Universities have been assigned to this staff');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $assignedUniversities = StaffUniversity::where('user_id', $id)->get();
            foreach($assignedUniversities as $assignee) {
                $assignee->delete();
            }
            
            DB::commit();
            return redirect()->back()->with('success', 'Assigned universities have been removed');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
