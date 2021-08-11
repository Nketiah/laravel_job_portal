@extends('layouts.verify-layout')

@section('content')
    
 {{-- <p>ID {{$id}}</p> --}}
 <section class="flex justify-center ">
      <div class="bg-gray-50 w-full px-20 py-10 ">

        <div>
            <div class="flex items-center">
                <img class="h-20 w-20 " src="{{ asset('storage/'.$job->company_logo) }}" alt="" srcset="">
                <p class="text-4xl font-semibold text-gray-800 capitalize px-6">{{ $job->job_title }}</p>
            </div>
            
            <div class="mt-10">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-700 capitalize text-2xl">{{ $job->job_location }}</p>
                </div>
                <p class="text-gray-700 capitalize text-2xl">{{ $job->company_name }}</p>
                <p class="text-gray-700 capitalize text-2xl">{{ $job->job_type }}</p>
                <p class="font-bold mt-2">{{ $job->created_at->diffForHumans() }}</p>
            </div>
    
            <div class="mt-8">
                <p class="border-b pb-2 border-gray-500 capitalize text-xl font-bold text-gray-800">Job description</p>
                <p class="text-gray-600 pt-2">{{ $job->job_description }}</p>
            </div>
    
            <div class="mt-10">
                <p class="border-b pb-2 border-gray-500 capitalize text-xl font-bold text-gray-800">Job requirements</p>
                @foreach ($job->job_requirement as $item)
                    <div class="flex pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                          </svg>
                        <div class="border mx-1 px-2 rounded capitalize">{{ $item }}</div>
                    </div>
                @endforeach
            </div>
        </div>
         <div>
             <div class="py-12 float-right">
                 <a href="{{ route('apply-for-job', ['id' => $job->id, 'companyId' => $job->user_id]) }}" class="px-4 py-3 text-white bg-blue-700 rounded outline-none hover:bg-blue-800">Apply Now!</a>
             </div>
         </div>


      </div>
 </section>

@endsection