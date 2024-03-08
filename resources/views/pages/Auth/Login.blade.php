<!-- resources/views/child.blade.php -->

@extends('layouts.app')
@section('title', 'Login')
    @section('content')
    <x-container>
        <div class="w-full h-dvh gap-5 flex justify-center items-center">
            <div class="card bg-base-100 shadow-xl w-[50%]">
                <div class="card-body">
                  <h2 class="card-title text-[35px] font-bold">LOGIN</h2>
                  <p class=" opacity-[0.7]">Please fill out all fields</p>
                    <form class="flex justify-center items-center flex-col gap-2">
                        <label class="input w-full input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
                            <input type="text" class="grow" placeholder="Email" />
                        </label>
                        <label class="input w-full input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                            <input type="password" class="grow" value="password" />
                        </label>
                        <div class="card-actions flex w-full items-center py-2 ">
                            <p class="opacity-[0.7]">Don't have an account? <a  href="{{route("pages.Auth.register")}}" class="font-bold cursor-pointer active:text-red-500 text-md">Register here</a></p>
                            <a class="font-bold cursor-pointer text-sm opacity-[0.6] ">Forget Password</a>
                         </div>
                         <div class=" w-full flex flex-col gap-3">
                           <button class="btn  w-full btn-active btn-accent text-white">LOGIN</button>
                           <button class="btn  w-full">LOGIN WITH GOOGLE</button>
                         </div>
                       </div>
                    </form>
              </div>
              <svg width="700" height="700" >
                <image href="/undraw_login_re_4vu2.svg" width="700" height="700" />
              </svg>
        </div>
    </x-container>
    @endsection


