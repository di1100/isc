@extends('layout')

@section('content')
<h3>{{$category->name}}</h3>
<ul id="list">

<!--@foreach($category->articles as $article)
<li><a href="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
@endforeach-->

</ul>
<form method="POST" action="{{route("article.post")}}">
  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea  name="content" class="form-control" rows="3"></textarea>
  </div>
  <input name="category_id" type="hidden" value="{{$category->id}}">
<div class="btn-group" role="group" aria-label="...">
    <button type="submit" class="btn btn-default">Create</button>
    <button type="reset" class="btn btn-default">Cancel</button>
</div>
</form>


<script>
$(document).ready(function(){
        $.get("{{ route("xhr.category.get", ["id"=>$category->id])}}", function(data, status){
        console.log(status);    
        for(var i=0;i<data.length;i++){
                $("#list").append("<li>"+ data[i].title+"</li>");
        }
        });
});
</script>
@stop


