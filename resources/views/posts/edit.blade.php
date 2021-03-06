@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edit Post {{$posts->title}}</div>

                <div class="card-body">    


  <form action="{{route('post.update',['id'=>$posts->id])}}" method="POST" enctype="multipart/form-data">
                @csrf




                <div class="form-group">
    <label for="exampleFormControlSelect1">Categories </label>
    <select class="form-control" name="category_id">

    @foreach($category as $categories)

    @if ( $categories->id==$posts->category_id)
    <option value="{{$categories->id}}" selected>{{$categories->name}}</option> 
  

    @else
    <option value="{{$categories->id}}">{{$categories->name}}</option>

    @endif
      @endforeach
    </select>
  </div>


  <div class="form-check form-check-inline">
  @foreach ( $tag as $tags)
  <label class="form-check-label" >{{$tags->tag}}:</label>
  <input class="form-check-input" type="checkbox" name='tagvalue[]'  value="{{$tags->id}}"
    
    @foreach ( $posts->tags as $tag)
@if  ($tags->id==$tag->id)
   
checked 
@endif
@endforeach
> 
@endforeach

</div>



               
  <div class="form-group">
    <label for="Title">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{$posts->title}}">
  @error('title')
   <div class='invalid-feedback'>
   champ obligatoire*
   </div>
   @enderror
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
  <textarea class="form-control" name="content"  rows="8" cols="8">{{$posts->content}}</textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"> Choise Photo</label>
    <input type="file" class="form-control-file" name="image">
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>
</form>
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
@endsection
