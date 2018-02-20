


@extends('layout.master.main')

@section('page-content')


<div class="container">
  @include('layout.partial.nav')
<!-- Main component for a primary marketing message or call to action -->



<form name="f1" action="viewpost" method="post" id="f1id">
  {{ csrf_field() }}
  <input type="hidden"  name="idh" id="idhid">
  @forelse ($posts as $post)


<div class="well">
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading">



      <a href="#" onClick="document.f1.idh.value={{$post->id}}; document.f1.submit();" >{{$post->title}}</a>
      </h4>
      <p class="text-right">By: {{$post->user->name}}</p>
      <p>{{$post->body}}</p>
      <ul class="list-inline list-unstyled">
        <li><span><i class="glyphicon glyphicon-calendar"></i> {{$post->created_at->diffForHumans()}}</span></li>

        @if ( $post->reply->count()>0 )
        <li>|</li>
        {{$post->reply->count()}} comment(s)
        @else
        <li>Be the first to Reply</li>
        @endif

      </ul>
    </div>

</form>
@if(  Session::get('session_userid')!='' &&  Session::get('session_userid')==$post->user_id )
<table align="right"  ><tr><td>
      {!! Form::open(['route' => 'get_edit_post' , 'id' => 'edit-post', 'method' => 'post', 'class' => 'text-right']) !!}
        {!! Form::hidden('post_id',$post->id) !!}
        {!! Form::button('Edit',['class' => 'btn btn-primary' , 'type' => 'submit']) !!}
      {!! Form::close() !!}
</td><td>&nbsp;&nbsp;</td><td>
      {!! Form::open(['route' => 'delete_post' , 'id' => 'delete-post', 'method' => 'DELETE', 'class' => 'text-right']) !!}
        {!! Form::hidden('idh',$post->id) !!}
        {!! Form::button('Delete',['class' => 'btn btn-danger' , 'type' => 'submit']) !!}
      {!! Form::close() !!}
</td></tr></table>
@endif
  </div>

</div>

@empty
<p> No Post Found </ p>
@endforelse

    </div>
    @stop
