@extends('layout')

@section('content')
<ul>
@foreach($categories as $category)
<li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
@endforeach
</ul>
<form method="POST">
  <div class="form-group">
    <label>Category name</label>
    <input name="name" type="text" class="form-control" placeholder="...">
  </div>
<div class="btn-group" role="group" aria-label="...">
    <button type="submit" class="btn btn-default">Create</button>
    <button type="reset" class="btn btn-default">Cancel</button>
</div>
</form>
<a href="../../../../../Users/ervian/AppData/Local/Temp/Contextual alternatives.URL"></a>
@stop