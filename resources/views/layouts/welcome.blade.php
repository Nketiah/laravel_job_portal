@extends('layouts.verify-layout')


@section('content')
    <div class="flex justify-center">
        <div class=" w-full bg-white px-6  pt-20">
           @if ($jobs->count())
           @foreach ($jobs as $job)
           <div class="flex justify-between items-center border-t py-2 hover:bg-gray-100" id="parent-div">
                <div class="flex item-center pl-3">
                    <div class="">
                        @if ($job->company_logo)
                          <div class="py-3">
                              <img class="h-12 w-12" src="{{ asset('storage/'.$job->company_logo) }}" alt="" srcset=""> 
                          </div>
                        @else
                          <div class="py-3 px-2 border rounded">
                              <img class="h-10 w-10" src="{{ asset('images/nologo.svg') }}" alt="" srcset=""> 
                          </div>
                        @endif
                    </div>
                    <div class="flex flex-col pl-3">
                       <div>
                          <p class="text-lg font-semibold text-gray-800 capitalize">{{ $job->job_title }}</p>
                          <p class="text-gray-700 capitalize" style="font-size: 17px;">{{ $job->company_name }}</p>
                          <p class="text-gray-400 capitalize">{{ $job->job_type }}</p>
                       </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-gray-400">{{ $job->job_location }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    @foreach ($job->job_requirement as $item)
                            <div class="border mx-1 px-2 rounded capitalize">{{ $item }}</div>
                    @endforeach
                </div>
                <div class="pr-3 flex">
                    <p>{{ $job->created_at->diffForHumans() }}</p>
                    <div class="ml-3" id="btn-apply" >
                        <form  method="post" action="{{ route('job-details', $job->id) }}">
                           @csrf
                           <button type="submit" class="bg-blue-600 text-gray-100 px-3 py-2 rounded">More...</button>
                        </form>
                    </div>
                </div>
           </div>
      @endforeach
       <div class="py-9">
        {{ $jobs->links() }}
       </div>
         @else
             <p>There are no post</p>
         @endif
           
        </div>
    </div>
@endsection


