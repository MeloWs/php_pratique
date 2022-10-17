@extends('layouts/base')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
@foreach ($lesposts as $unpost)
<div style="width:400px;padding:15px;text-align:center;">
    <div> {{$unpost->id}}
        <h2>{{$unpost->title}}</h2>
    </div>
    <div> {{$unpost->body}}</div>
    <a href="{{route('post.show', $unpost->id)}}">VOIR</a>
    <a href="{{route('post.edit', $unpost->id)}}">MODIFIER</a>
    <a href="{{route('post.delete', $unpost->id)}}">SUPPRIMER</a>
</div>
@endforeach
@endsection