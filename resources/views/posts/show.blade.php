@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="row">
           <div class="col-8">
               <img src="/storage/{{ $post->image }}" class="img-fluid">
           </div>
           <div class="col-4">
               <div>
                   <div class="d-flex align-items-center">
                       <div class="pr-3">
                           <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle img-fluid" style="max-width: 75px">
                       </div>
                       <div>
                           <div class="font-weight-bold ">
                               <a href="/profile/{{$post->user->id}}">
                                   <span class="text-dark">{{ $post->user->username }} &#8226;
                                   </span>
                               </a>
                               <a href ="#">Follow </a>
                           </div>
                       </div>
                   </div>
                   <hr>
                   <div>
                       <span class="font-weight-bold text-dark">
                           <a href="/profile/{{$post->user->id}}">
                               <span class="text-dark">{{ $post->user->username }}
                               </span>
                           </a>
                       </span> {{ $post->caption }}
                   </div>
               </div>

           </div>
       </div>
   </div>
</div>
@endsection
