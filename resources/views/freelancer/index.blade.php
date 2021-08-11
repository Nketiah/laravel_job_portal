@extends('layouts.auth-master')

@section('content')

      <section class="main-section" :class="{'sm:ml-72':nav_open === true, 'ml-24':nav_open === false}">
        <div class="dashboard-cards  h-screen grid grid-col-1 pb-24">
             {{-- {{ auth()->user() w-11/12 }} 
                 @include('header.sidebar')  --}}

            <div class="overflow-y-hidden grid grid-col-1">
                  <div class="overflow-x-hidden  grid md:grid-cols-2  pr-4 sm:px-4 pt-5"
                        :class="{'lg:grid-cols-3 gap-8':nav_open === true, 'lg:grid-cols-4 gap-8':nav_open === false}">
                        <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                            <img class="mx-auto" src="{{ asset('images/propo.png') }}" alt="" srcset="">
                            <p class="text-xl flex justify-center text-gray-600">Jobs Applied</p>
                            <p class="flex justify-center"> ({{ auth()->user()->applications()->count() }}) </p>
                            <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>

                        <div class="px-8 py-8  bg-gray-50 shadow-md rounded-md">
                           <img class="mx-auto" src="{{ asset('images/propo.png') }}" alt="" srcset="">
                           <p class="text-xl flex justify-center">Application Status</p>
                           <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>

                        <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                           <img class="mx-auto" src="{{ asset('images/new_msg.png') }}" alt="" srcset="">
                           <p class="text-md flex justify-center">New Messages</p>
                           <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>

                       <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                         <img class="mx-auto" src="{{ asset('images/target.png') }}" alt="" srcset="">
                         <p class="text-xl flex justify-center">Post Job</p>
                         <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                       </div>

                          {{-- End of first row  --}}
                        
                        <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                            <img class="mx-auto" src="{{ asset('images/target.png') }}" alt="" srcset="">
                            <p class="text-xl flex justify-center">Post Job</p>
                            <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>

                         <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                            <img class="mx-auto" src="{{ asset('images/target.png') }}" alt="" srcset="">
                              <p class="text-xl flex justify-center">Post Job</p>
                              <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                         </div>

                          <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                              <img class="mx-auto" src="{{ asset('images/propo.png') }}" alt="" srcset="">
                              <p class="text-xl flex justify-center text-gray-600">Post Job</p>
                              <a href="#" class="flex justify-center text-md text-blue-500">Click to post</a>
                          </div>

                          <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                            <img class="mx-auto" src="{{ asset('images/propo.png') }}" alt="" srcset="">
                            <p class="text-xl flex justify-center">Post Job</p>
                            <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>

                        {{-- End of second row  --}}

                        <div class="px-16 py-8  bg-gray-50 shadow-md rounded-md">
                            <img class="mx-auto" src="{{ asset('images/new_msg.png') }}" alt="" srcset="">
                            <p class="text-md flex justify-center">New Messages</p>
                            <a href="#" class="flex justify-center text-md text-blue-500">Click to view</a>
                        </div>
             </div>
            </div>
        </div>
     </section>

   {{-- End of wrapper div --}}

@endsection

