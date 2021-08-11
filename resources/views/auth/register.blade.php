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
                      <p class="pb-10 text-3xl mt-3 text-gray-500">Create a Free Account</p>
                 </div>
                <form action="{{ route('register') }}" method="post" x-data="{role_id: 1}">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        @error('name')
                             <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                        @enderror
                    </div>
    
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
    
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Password again</label>
                        <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
                        @error('password_confirmation')
                             <div class="text-red-500 mt-1 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                       
                       <div class="mb-4 mt-16">
                        <span class="text-gray-700">Account Type</span>
                           <div>
                            <div class="mt-2">
                                <div class="mt-2 flex flex-col sm:flex-row justify-between">
                                    <label class="inline-flex items-center pb-5 sm:pb-0">
                                        <input type="radio" class="form-radio" name="role_id" x-model="role_id" value="1">
                                        <span class="ml-2">Freelancer</span>
                                      </label>
                                      <label class="inline-flex items-center sm:ml-6">
                                        <input type="radio" class="form-radio" name="role_id" x-model="role_id" value="2">
                                        <span class="ml-2">Business(Company)</span>
                                      </label>
                                </div>
                              </div>
                           </div>
                       </div>
                     
                    <div class="mt-10">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-4 rounded 
                         w-full text-lg font-bold">Register</button>
                    </div>
                </form>

                <div class="flex justify-center mt-10">
                    <a href="{{ route('login') }}" class="text-gray-700 font-bold hover:underline">Are you already registered? Login</a>
                </div>
            </div>
    
        </div>
   </div>  

@endsection

<script>
    //alert(33)
</script>