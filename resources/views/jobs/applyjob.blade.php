@extends('layouts.auth-master')

@section('content')

      <section class="main-section" :class="{'sm:ml-72':nav_open === true, 'ml-24':nav_open === false}">
        <div class="dashboard-cards  h-screen grid grid-col-1">
             {{-- {{ auth()->user() w-11/12 }} 
                 @include('header.sidebar')  --}}

            <div class="overflow-y-hidden grid grid-col-1">
                  <div class="overflow-x-hidden  grid grid-cols-1  pr-4 sm:px-4">
                    <div class="bg-white sm:px-16 py-8">
                          <div class="flex justify-between px-7">
                            <p class="pt-2 pb-10 text-gray-500 text-xl font-bold">Fill the form below to Apply for this Job!</p>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                          </div>

                          <form method="POST" action="{{ route('save-job-applied') }}" enctype="multipart/form-data">
                              @csrf
                              <div>
                                 <input type="hidden" name="jobId" id="jobId" value="{{$id}}">
                                 <input type="hidden" name="companyId" id="companyId" value="{{$companyId}}">
                              </div>
                         <div class="flex flex-wrap mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="firstname" class="text-gray-900 text-base font-bold">First Name</label>
                                <input type="text" name="firstname" id="firstname" 
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstname') border-red-500 @enderror" value="{{ old('firstname') }}">
                                @error('firstname')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                             </div>
    
                             <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="lastname" class="text-gray-900 text-base font-bold">Last Name</label>
                                <input type="lastname" name="lastname" id="lastname" 
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
                                @error('lastname')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>

                         <div class="flex flex-col sm:flex-row mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="age" class="text-gray-900 text-base font-bold">Age</label>
                                <input type="text" name="age" id="age" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('age') border-red-500 @enderror" value="{{ old('age') }}">
                                @error('age')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="religion " class="text-gray-900 text-base font-bold">Religion</label>
                                <input type="text" name="religion" id="religion" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('religion') border-red-500 @enderror" value="{{ old('religion') }}">
                                @error('religion ')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>
                             
                         <div class="flex flex-col sm:flex-row mb-4">
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="nationality" class="text-gray-900 text-base font-bold">Nationality</label>
                                <select name="nationality" id="nationality" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nationality') border-red-500 @enderror" value="{{ old('nationality') }}">
                                  <option value="">--- Choose Nationality ---</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Ivory Coast">Ivory Coast</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Kenya">Kenya</option>
                                </select>
                                @error('nationality')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-full  md:w-1/2 mb-4 px-5">
                                <label for="institution" class="text-gray-900 text-base font-bold">Institution</label>
                                <input type="text" name="institution" id="institution" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('institution') border-red-500 @enderror" value="{{ old('institution') }}">
                                @error('institution')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                         </div>

                         <div class="flex flex-col sm:flex-row mb-4">
                            <div class="max-w-md  md:w-1/2 mb-4  mx-auto py-6 flex flex-col border-2 border-dashed border-gray-400 rounded-md items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                               <p class="text-xl py-4">Select National Service Certificate(Optional)</p>
                              
                               <label class="bg-gray-300 py-4 cursor-pointer h-6 inline-flex items-center outline-none  border-2 border-blue-400  rounded-md">
                                   Select file
                                  <input type="file" name="nss_certificate" id="nss_certificate" class="outline-none @error('nss') border-red-500 @enderror" value="{{ old('nss') }}">
                               </label>
                               
                              @error('nss')
                                  <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                              @enderror
                          </div>
                            <div class="max-w-md  md:w-1/2 mb-4  mx-auto py-6 flex flex-col border-2 border-dashed  rounded-md items-center  border-gray-400">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                  </svg>
                                 <p class="text-xl py-4">Select Resume/CV(Optional)</p>
                                
                                 <label class="bg-gray-300  py-4 cursor-pointer h-9 inline-flex items-center outline-none  border-2 border-blue-300  rounded-md">
                                     Select file
                                    <input type="file" name="resume" id="resume" class="outline-none @error('resume') border-red-500 @enderror" value="{{ old('resume') }}">
                                 </label>
                                 
                                @error('resume')
                                    <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                          </div>

                        <div class="pb-40 float-right">
                            <button type="submit" class="px-12 py-3 bg-blue-700 text-white rounded-full text-lg">Apply</button>
                        </div>
                    </form>
                </div>
             </div>
            </div>
        </div>
     </section>

   {{-- End of wrapper div --}}

@endsection






