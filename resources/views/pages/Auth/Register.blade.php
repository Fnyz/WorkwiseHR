<!-- resources/views/child.blade.php -->

@extends('layouts.app')
@section('title', 'REGISTER')
@section('content')
<x-container>
    {{-- @include("partials.__links") --}}
    <div class="w-full h-dvh gap-5 flex justify-center items-center">
        <div class="card bg-base-100 shadow-xl w-[50%]">
            <div class="card-body">
              <h2 class="card-title text-[35px] font-bold">REGISTER</h2>
              <p class=" opacity-[0.7]">Please fill out all fields</p>
                <form class="flex justify-center items-center flex-col gap-2">
                    <label class="input w-full input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
                        <input type="text" class="grow" placeholder="Email" />
                    </label>
                    <label class="input w-full input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
                        <input type="text" class="grow" placeholder="Username" />
                      </label>
                    <hr/>
                  
                    <label class="input w-full input-bordered flex items-center gap-2">
                        <span class="font-bold opacity-[0.7]" >Password</span>          
                        <input type="password" class="grow" value="password" />
                    </label>
                    
                    <label class="input w-full input-bordered flex items-center gap-2">
                        <span class="font-bold opacity-[0.7]">Confirm Password</span>
                        <input type="password" class="grow" value="password" />
                    </label>
                    <div class="card-actions flex w-full items-center py-2 ">
                        <p class="opacity-[0.7]">Already have an account? <a  href="{{route("pages.Auth.login")}}" class="font-bold cursor-pointer text-md active:text-red-500">Login here</a></p>
                     </div>
                     <div class=" w-full flex flex-col gap-3">
                       <button class="btn  w-full btn-active btn-accent text-white">REGISTER</button>
                     </div>
                   </div>
                </form>
            
          </div>
          <svg width="700" height="700" >
            <image href="/undraw_sign_up_n6im.svg" width="700" height="700" />
          </svg>
    </div>

</x-container>

@endsection