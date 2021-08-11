<?php

namespace App\Http\Controllers;

use App\Models\Job_Applied;
use Illuminate\Http\Request;

class JobAppliedController extends Controller
{

    public function store()
    {
        //dd($request);

       $validatedData =   request()->validate([

            'firstname' => ['required','unique:job__applieds'],
            'lastname' => ['required','unique:job__applieds'],
            'age' => ['required'],
            'religion' => ['required'],
            'nationality' => ['required'],
            'institution' => ['required'],
            'nss_certificate' => ['required','mimes:pdf'],
            'resume' => ['required','mimes:pdf,doc,docx'],
            
      ]);
    
     
      //return;
    
        if(request()->hasFile("nss_certificate") && request()->hasFile("resume"))
        {
            $nsspath = request()->file("nss_certificate");
            $resumepath = request()->file("resume");
            $nsspathToSave = $nsspath->store("logos", "public");
            $resumepathToSave = $resumepath->store("logos", 'public');

            $validatedData["nss_certificate"] = $nsspathToSave;
            $validatedData['resume'] = $resumepathToSave;
            $validatedData["job_model_id"] = request()->jobId;
            $validatedData["company_id"] = request()->companyId;
            //dd($validatedData);
            
            request()->user()->applications()->create($validatedData);
            return redirect()->back()->with('job-applied', 'Application sent successfully'); 
        }

     }
}
