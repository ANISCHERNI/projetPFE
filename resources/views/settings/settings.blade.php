@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit  Settings</div>

                <div class="card-body">
                <form action="{{route('settings.update')}}" method="POST">
                @csrf
  <div class="form-group">
    <label for="name">blog_name</label>
  <input type="text" class="form-control" name="blog_name" placeholder="Entre blog_name" value="{{$setting->blog_name}}">
</div>

<div class="form-group">
    <label for="name">blog_email</label>
    <input type="text" class="form-control" name="blog_email" placeholder="Entre blog_email" value="{{$setting->blog_email}}">
</div>


<div class="form-group">
    <label for="name">phone_number</label>
    <input type="text" class="form-control" name="phone_number" placeholder="Entre phone_number" value="{{$setting->phone_number}}">
</div>


<div class="form-group">
    <label for="name">adress</label>
    <input type="text" class="form-control" name="adress" placeholder="Entre adress" value="{{$setting->adress}}">
</div>
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    
    <br>
  <button type="submit" class="btn btn-primary">update</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 