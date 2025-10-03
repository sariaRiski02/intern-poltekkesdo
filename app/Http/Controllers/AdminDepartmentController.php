<?php

namespace App\Http\Controllers;

use App\Models\visitor;
use App\Models\activity;
use App\Models\department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDepartmentController extends Controller
{
    public function detail_department(department $department)
    {
        $department->loadCount('intern');
        $requirments = $department->requirement()->get();
        return view('admin.detail-department', compact('department', 'requirments'));
    }


    public function update_department(department $department)
    {
        $dept = $department->with('requirement');
        $requirments = $department->requirement->pluck('name')->implode(', ');


        return view('admin.form.department-form', compact('department', 'requirments'));
    }

    public function update_department_process(Request $request, department $department)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'head_desc' => 'required|string|max:255',
            'requirements' => 'nullable|string',
            'desc' => 'required|string',
        ]);


        $department->update([
            'name' => $request->name,
            'head_desc' => $request->head_desc,
            'desc' => $request->desc,
        ]);

        // update requirements
        $requirements = explode(',', $request->requirements);
        $requirements = array_map('trim', $requirements);
        $department->requirement()->delete();
        foreach ($requirements as $requirement) {
            if (!empty($requirement)) {
                $department->requirement()->create(['name' => $requirement]);
            }
        }

        // log activity
        activity::create([
            'activity' => 'create',
            'description' => 'mendaftar lamaran magang',
            'name' => Auth::user()->admin->fullname ?? request()->ip(),
            'visitor_id' => visitor::where('ip', request()->ip())->first()->id ?? null,
        ]);


        return redirect()->route('admin.department');
    }

    public function delete_department(department $department)
    {
        $department->is_active = false;
        $department->save();

        // log activity
        activity::create([
            'activity' => 'create',
            'description' => 'mendaftar lamaran magang',
            'name' => Auth::user()->admin->fullname ?? request()->ip(),
            'visitor_id' => visitor::where('ip', request()->ip())->get()->id ?? null,
        ]);

        return redirect()->route('admin.department');
    }

    public function add_department()
    {
        return view('admin.form.department-form');
    }

    public function add_department_process(Request $request)
    {
        // dd('test');
        $request->validate([
            'name' => 'required|string|max:255',
            'head_desc' => 'required|string|max:255',
            'requirements' => 'nullable|string',
            'desc' => 'required|string',
        ]);

        $slug = Str::slug($request->name);
        $department = department::create([
            'name' => $request->name,
            'slug' => $slug,
            'head_desc' => $request->head_desc,
            'desc' => $request->desc,
            'admin_id' => Auth::user()->admin->id ?? null,
        ]);

        // add requirements
        $requirements = explode(',', $request->requirements);
        $requirements = array_map('trim', $requirements);
        foreach ($requirements as $requirement) {
            if (!empty($requirement)) {
                $department->requirement()->create(['name' => $requirement]);
            }
        }

        // log activity
        activity::create([
            'activity' => 'create',
            'description' => 'mendaftar lamaran magang',
            'name' => Auth::user()->admin->fullname ?? request()->ip(),
            'visitor_id' => visitor::where('ip', request()->ip())->first()->id ?? null,
        ]);

        return redirect()->route('admin.department');
    }
}
