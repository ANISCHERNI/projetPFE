@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Edit :{{$tag->name}}</div>  

                <div class="card-body">
                <form action="{{route('tag.update',['id'=>$tag->id])}}" method="POST">
                @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" value="{{$tag->name}}">

    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    
    <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 