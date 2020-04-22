@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create category</div>

                <div class="card-body">
              


                <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
    </tr>
  </thead>
  <tbody>

  @foreach($category as $categories)
    <tr>

      <th scope="row">{{$categories->name}}</th>
      <td><a href="{{route('categories.edit',['id'=>$categories->id])}}"><img src="https://img.icons8.com/pastel-glyph/25/000000/edit.png"/></a></td>
      <td><a href="{{route('categories.destroy',['id'=>$categories->id])}}"><img src="https://img.icons8.com/material-outlined/20/000000/delete-forever.png"/></a></td>
   
    </tr>
  @endforeach
   
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 