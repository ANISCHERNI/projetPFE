@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">


  <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf




                <div class="form-group">
    <label for="exampleFormControlSelect1">Categories </label>
    <select class="form-control" name="category_id">
    @foreach($category as $categories)
      <option value="{{$categories->id}}">{{$categories->name}}</option>
      @endforeach
    </select>
  </div>


               
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" placeholder="Entre title">
  @error('title')
   <div class='invalid-feedback'>
   champ obligatoire*
   </div>
   @enderror
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" name="content" rows="8" cols="8"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"> Choise Photo</label>
    <input type="file" class="form-control-file" name="featured">
  </div>
  
  <button type="submit" class="btn btn-primary">save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
