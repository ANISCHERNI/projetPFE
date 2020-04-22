@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create category</div>

                <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" placeholder="Entre title">
  @error('name')
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
 