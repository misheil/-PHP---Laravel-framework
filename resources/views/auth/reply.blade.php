


@extends('layout.master.main')

@section('page-content')


<div class="container">
  @include('layout.partial.nav')
<!-- Main component for a primary marketing message or call to action -->
@include('layout.partial.form_errors')




 @forelse ($post as $post)

 <div class="well">
   <div class="media">
     <div class="media-body">
       <h4 class="media-heading">
         {{$post->title}}
       </h4>
       <p class="text-right">By: {{$post->user->name}}</p>
       <p>{{$post->body}}</p>
       <ul class="list-inline list-unstyled">
         <li><span><i class="glyphicon glyphicon-calendar"></i> {{$post->created_at->diffForHumans()}}</span></li>


       </ul>
     </div>
   </div>
 </div>

@empty
<p> No Reply Found </ p>
@endforelse
{{ $reply->appends(Request::all())->render() }}
@forelse ($reply as $reply)

 <div class="well">
   <div class="media">
     <div class="media-body">

       <p class="text-right">By: {{$reply->user->name}}</p>
       <p>{{$reply->body}}</p>
       <ul class="list-inline list-unstyled">
         <li><span><i class="glyphicon glyphicon-calendar"></i>
{{ $reply->created_at->diffForHumans()}}
           </span></li>
       </ul>
     </div>
   </div>
 </div>
 @empty
 <p> No Reply Found </ p>
 @endforelse



   @if( Session::get('session_name') )
   <form class="form-signin" method="POST" action="{{ route('save_reply') }}">
     <input type="hidden" name="idh" value="{{$idh}}">
     {{ csrf_field() }}
     <h2 class="form-signin-heading">Reply form </h2>
     <br />
     <textarea name="inputPost" cols="80" rows="10"  class="form-control" placeholder="Enter The Reply" required></textarea>
   <br />
     <input type="submit" class="btn btn-lg btn-primary btn-block" name="Addreply"  style="width:220px;" value="Save Reply" >
   </form>
   @endif

    </div>
    @stop
