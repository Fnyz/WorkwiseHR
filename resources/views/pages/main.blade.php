<!-- resources/views/child.blade.php -->

@extends('layouts.app')
@section('title', 'Homepage')
    @section('content')
    <x-container>

    <div class="hero min-h-screen ">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-4xl font-bold">Welcome to WorkwiseHR</h1>
            <p class="py-6 opacity-[0.7]"> Your leave management solution. Employees can request leave, while HR effortlessly tracks and manages leave. Simplify leave management and streamline onboarding. </p>
            <a href="{{route("pages.Auth.login")}}" class="btn btn-primary w-[60%]">Get Started</a>
          </div>
        </div>
      </div>

    </x-container>

        
    @endsection


