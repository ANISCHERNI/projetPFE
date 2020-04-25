@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">posts</div>

                <div class="card-body">
              

@if ($posts->count()>0)
    

                <table class="table">
  <thead>
    <tr>
      <th scope="col">photo</th>
      <th scope="col">title</th>  
      <th scope="col">content</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
      
        
    </tr>
  </thead>
  <tbody>
   
  @foreach($posts as $post)
    <tr>

    <th scope="row"><img src="{{ URL::to('/') }}/images/{{ $post->image }}" class="img-thumbnail" width="70px" > </th>
      
      <th scope="row">{{$post->title}}</th>
      

      <th scope="row">{{$post->content}}</th>
      <td><a href="{{route('post.edit',['id'=>$post->id])}}"><img src="https://img.icons8.com/pastel-glyph/25/000000/edit.png"/></a></td>
      <td><a href="{{route('post.destroy',['id'=>$post->id])}}"><img src="https://img.icons8.com/material-outlined/20/000000/delete-forever.png"/></a></td>
   
   
    </tr>
  @endforeach
@else 

<p class="text-center">Oops!! No posts To Show </p>
  
  @endif
   
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 