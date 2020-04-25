@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>

                <div class="card-body">
              

@if ($tag->count()>0)
    

                <table class="table">
  <thead>
    <tr>
  
      <th scope="col">name</th>  
  
      <th scope="col">edit</th>
      <th scope="col">delete</th>
      
        
    </tr>
  </thead>
  <tbody>
   
  @foreach($tag as $tags)
    <tr>

   <!-- <th scope="row"><img src="{{ URL::to('/') }}/images/{{ $tags->image }}" class="img-thumbnail" width="70px" > </th>
   -->  
      <th scope="row">{{$tags->tag}}</th>
      

     
      <td><a href="{{route('tag.edit',['id'=>$tags->id])}}"><img src="https://img.icons8.com/pastel-glyph/25/000000/edit.png"/></a></td>
      <td><a href="{{route('tag.destroy',['id'=>$tags->id])}}"><img src="https://img.icons8.com/material-outlined/20/000000/delete-forever.png"/></a></td>
   
   
    </tr>
  @endforeach
@else 

<p class="text-center">Oops!! No Tags To Show </p>
  
  @endif
   
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 