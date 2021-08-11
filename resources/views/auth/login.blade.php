@extends('layouts.master')


@section('content')

     <div class="flex flex-col sm:flex-row  rounded-lg  mb-10">
        <div class="bg-gradient-to-r from-purple-500 to-blue-900  w-full pt-20 sm:w-6/12 pb-40 ">
            <div class="ml-5 pr-5 mx-auto text-white">
                {{-- <h2 class="mb-5 app-font text-3xl text-bold">Welcome to Homeconnect</h2> --}}
                <ul>
                    <img class=" w-32 h-32 sm:w-96  sm:h-96 mx-auto" src="{{ asset('images/hero.png') }}" alt="" srcset="">
                </ul>
                <p class="mt-10 text-xl ">
                      Are you an individual, company or an organization
                      who needs the services of expert service providers
                      or freelancers from any part of the world to work 
                      on projects/contracts for you or offer their 
                      services to you at very favourable prices?.
                </p>
            </div>
        </div>
         {{-- first one --}}
          
         <div class="w-full sm:w-6/12 pt-10 pb-20 px-4 bg-white p-6 ">
            {{-- <div class="w-4/12 bg-white p-6 rounded-lg pb-14"> --}}
            <div class="px-3 sm:px-32 mb-6  sm:mx-auto"> 
                 <div class="flex justify-items-center mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <p class="pb-10 text-3xl mt-3 text-gray-500">Login to your Account</p>
                 </div>
                <form action="{{ route('login') }}" method="post" x-data="{role_id: 1}">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                        @enderror
                    </div>
    
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="text" name="password" id="password" placeholder="Choose your password" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                        @error('password')
                           <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                        @enderror
                    </div>

                     <div class="flex justify-between mt-10">
                         <div class="mb-4">
                            <div class="flex items-center">
                               <input type="checkbox" name="remember" id="remember" class="mr-2">
                               <label for="remember" class="text-gray-500">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('forgot-password') }}" class=" text-gradient from-purple-500 to-blue-900 hover:underline">Forgot Password?</a>
                        </div>
                    </div>
                     
                    <div class="mt-10">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-4 rounded 
                         w-full text-lg font-bold hover:bg-blue-600">Login</button>
                    </div>
                </form>

                 <div class="flex justify-center mt-10">
                     <a href="{{ route('register') }}" class="text-gray-700 font-bold hover:underline">Don't have an account? Register</a>
                 </div>
            </div>
    
        </div>
   </div>  

@endsection

<script>
    //alert(33)
</script>