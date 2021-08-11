<?php

namespace App\Http\Controllers;

use App\Models\Job_Applied;
use App\Models\JobModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class PagesController extends Controller
{
    
    public function index()
    {

        $jobs = JobModel::latest()->paginate(5);
        
        return view('layouts.welcome', ['jobs' => $jobs]);
    }

    public function show($id)
    {
        $singleJob = JobModel::find($id);
        //dd($singleJob);
        if($singleJob !== null)
        {
            return view('jobs.job-details', ['job' => $singleJob]);
        }
        
    }


    public function jobApply()
    {
        $id =  request()->id;
        $companyId =  request()->companyId;

        return view('jobs.applyjob', ['id' => $id, 'companyId' => $companyId]);
    }

    public function loadPages()
    {
        if(auth()->user()->role_id == 1){ 
            return redirect()->route('freelancer');
            //return view('freelancer.index');
        }
    
         if(auth()->user()->role_id == 2) {
            
            $totalMessages = Job_Applied::where('company_id', '=', auth()->user()->id )->count();
            return redirect()->route('company', ['totalMessage' => $totalMessages]);
            //return view('company.index');
        } 

        else if(auth()->user()->role_id == 3){
            return view('auth.dashboard');
        }

    }


    public function test()
    {
        return view('auth.verify-email');
    }


}
