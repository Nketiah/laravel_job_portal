<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    
   public function index()
   {
       return view('freelancer.index');
   }
   

}
