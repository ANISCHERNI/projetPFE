@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create tag</div>

                <div class="card-body">
                <form action="{{route('tag.store')}}" method="POST">
                @csrf
  <div class="form-group">
    <label for="name">Tag name</label>
    <input type="text" class="form-control @error('tag') is-invalid @enderror " name="tag" placeholder="Entre title">
  @error('tag')
   <div class='invalid-feedback'>
   champ obligatoire*
   </div>
   @enderror
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    
    <br>
  <button type="submit" class="btn btn-primary">save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 