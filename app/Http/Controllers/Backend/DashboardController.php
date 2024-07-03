<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\ArrivalInfo;
use App\Models\Student;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('Super Admin')) {

            $pendingTasks = Task::where('status', 0)->count();

            $tasks = Task::orderBy('status', 'ASC')->orderBy('task_date', 'ASC')->get();

            return view('backend.dashboard.admin', ['tasks' => $tasks, 'pendingTasks' => $pendingTasks]);
        }

        if (Auth::user()->hasRole('Agent')) {
            $agent_id = User::where('id', Auth::id())->pluck('agent_id')->first();
            $agentApplications = Application::whereNotIn('status_id', [1])->where('agent_id', $agent_id)->count();
            $agentApplicants = Applicant::whereNotIn('status_id', [4])->where('agent_id', $agent_id)->count();
            return view('backend.dashboard.agent', ['agentApplications' => $agentApplications, 'agentApplicants' => $agentApplicants]);
        }

        if (Auth::user()->hasRole('Staff')) {
            $applicants = Applicant::whereNotIn('status_id', [4])->count();
            $pendingApplicants = Applicant::where('status_id', 4)->count();
            $arrivals = ArrivalInfo::get()->count();

            return view('backend.dashboard.staff', ['applicants' => $applicants, 'pendingApplicants' => $pendingApplicants, 'arrivals' => $arrivals]);
        }

        if (Auth::user()->hasRole('Student')) {
            $studentId = Student::where('email', Auth::user()->email)->pluck('id')->first();
            return view('backend.dashboard.student', ['studentId' => $studentId]);
        }
    }
}
