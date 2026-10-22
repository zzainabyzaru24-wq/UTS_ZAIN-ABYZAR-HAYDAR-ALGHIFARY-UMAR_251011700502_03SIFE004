<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobVacancy::orderBy('posted_date', 'desc')->get();

        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = JobVacancy::findOrFail($id);

        return view('jobs.show', compact('job'));
    }
}
