<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\JobModel;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function index()
    {
        return view('jobs.createjob');
    }

    public function store()
    {
        
        $validatedData = request()->validate([

                'job_title' => ['required'],
                'job_location' => ['required'],
                'company_name' => ['required'],
                'category' => ['required'],
                'job_type' => ['required'],
                'job_description' => ['required'],
                'job_requirement' => [''],
                'company_logo' => ['required','mimes:png,jpg,jpeg'] 
        ]);
        
        
        if(request()->hasFile("company_logo"))
        {
            $path = request()->file("company_logo");
            $pathToSave = $path->store("logos", "public");

            $validatedData["company_logo"] = $pathToSave;

            request()->user()->listings()->create($validatedData);
            return redirect()->back()->with('job-added', 'Job posted successfully'); 
      }

   }

}
