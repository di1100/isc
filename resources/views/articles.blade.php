@extends('layout')

@section('content')
<ul>
@foreach($articles as $article)
<li>{{$article->title}}</li>
@endforeach
</ul>
@stop

