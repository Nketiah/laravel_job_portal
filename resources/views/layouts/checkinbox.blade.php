@extends('layouts.master')


@section('content')
    <div class="flex  h-screen px-8 sm:px-1">
        <div class="rounded m-auto px-8 py-12" style="border: 3px solid rgb(0, 119, 255)">
            <img src="{{ asset('images/checkinbox.svg') }}" class="h-48 w-48 mx-auto pb-10" alt="" srcset="">
            <h2 class="px-auto mt-5 font-bold text-2xl text-gray-800 flex justify-center">Verify your email address</h2>
            <h5 class="text-gray-700 flex justify-center py-5 font-bold text-lg">Welcome to Job Portal</h5>
            <p class="text-gray-700 font-bold text-lg">Please check your inbox to confirm your email address and activate the account.</p>
             
            <div>
                <form action="{{ route('verification.send') }}" method="post">
                    @csrf
    
                    <div class="flex justify-center mt-10">
                        <button type="submit" class="bg-blue-500 text-white px-10 py-4 rounded 
                        font-medium text-lg">Resend Email</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection