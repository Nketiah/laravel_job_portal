@extends('layouts.master')


@section('content')
    <div class="flex justify-center">
        <div class="w-11/12 bg-white p-6 rounded-lg">
            Appication Dashboard
            {{ $user }}
        </div>
    </div>
@endsection