<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        try {
            $task = new Task();
            $task->task = $request->task;
            $task->task_date = $request->task_date;
            if ($task->save()) {
                return redirect()->back()->with('success', 'New task has been added');
            }

            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function statusChange(Request $request)
    {
        $task = Task::find($request->id);
        $task->status = $request->status;
        $task->save();
    }

    public function destroy($id)
    {
        try {
            $task = Task::find($id);

            if ($task->delete()) {
                return redirect()->back()->with('success', 'Task has been deleted');
            }

            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
