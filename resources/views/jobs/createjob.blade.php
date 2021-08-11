@extends('layouts.auth-master')

@section('content')

      <section class="main-section" :class="{'sm:ml-72':nav_open === true, 'ml-24':nav_open === false}">
        <div class="dashboard-cards  h-screen grid grid-col-1">
             {{-- {{ auth()->user() w-11/12 }} 
                 @include('header.sidebar')  --}}

            <div class="overflow-y-hidden grid grid-col-1">
                  <div class="overflow-x-hidden  grid grid-cols-1  pr-4 sm:px-4 pt-5">
                    <div class="bg-white sm:px-16 py-8 rounded-md">
                          <div class="flex justify-between px-7">
                            <p class="pt-2 pb-10 text-gray-500 text-xl font-bold">Fill the form below to post new job</p>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                          </div>

                          <form method="POST" action="{{ route('save-new-job') }}" enctype="multipart/form-data">
                              @csrf
                         <div class="flex flex-wrap mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="job_title" class="text-gray-900 text-base font-bold">Job Title</label>
                                <input type="text" name="job_title" id="job_title"  
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('job_title') border-red-500 @enderror" value="{{ old('job_title') }}">
                                @error('job_title')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                             </div>
    
                             <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="job_location" class="text-gray-900 text-base font-bold">Job Location</label>
                                <input type="job_location" name="job_location" id="job_location" 
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('job_location') border-red-500 @enderror" value="{{ old('job_location') }}">
                                @error('job_location')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>

                         <div class="flex flex-col sm:flex-row mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="company_name" class="text-gray-900 text-base font-bold">Company Name</label>
                                <input type="company_name" name="company_name" id="company_name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('company_name') border-red-500 @enderror" value="{{ old('company_name') }}">
                                @error('company_name')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="company_logo" class="text-gray-900 text-base font-bold">Company Logo</label>
                                <input type="file" name="company_logo" id="company_logo" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('company_logo') border-red-500 @enderror" value="{{ old('company_logo') }}">
                                @error('company_logo')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>
                             
                         <div class="flex flex-col sm:flex-row mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="category" class="text-gray-900 text-base font-bold">Job Category</label>
                                <select name="category" id="category" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category') border-red-500 @enderror" value="{{ old('category') }}">
                                  <option value="">--- choose Job Category ---</option>
                                  <option value="IT">IT</option>
                                  <option value="Mason">Mason</option>
                                  <option value="Fashion">Fashion</option>
                                  <option value="Agriculture">Agriculture</option>
                                  <option value="HR">HR</option>
                                  <option value="Technician">Technician</option>
                                </select>
                                @error('category')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="job_type" class="text-gray-900 text-base font-bold">Job Type(remote/office)</label>
                                <input type="job_type" name="job_type" id="job_type" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('job_type') border-red-500 @enderror" value="{{ old('job_type') }}">
                                @error('job_type')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>

                         <div class="w-full mb-14 px-5">
                            <label for="job_description" class="text-gray-900 text-base font-bold">Job Description</label>
                            <textarea name="job_description" id="job_description" rows="6"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('job_description') border-red-500 @enderror" value="{{ old('job_description') }}"></textarea>
                            @error('job_description')
                                <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                            @enderror
                        </div>

                         <div class="flex flex-col sm:flex-row justify-between mb-20 ">
                             <div class="w-full ">
                                @livewire('postnewjob')
                             </div>
                            <div class="w-full md:pl-32  lg:pl-96">
                                <button type="submit" class="w-full  py-2 sm:py-3 bg-blue-700 text-white rounded-full text-lg">Post Job</button>
                            </div>
                         </div>

                    </form>
                </div>
             </div>
            </div>
        </div>
     </section>

   {{-- End of wrapper div --}}

@endsection






