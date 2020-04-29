@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
              

@if ($users->count()>0)
    

                <table class="table">
  <thead>
    <tr>
      <th scope="col">photo</th>
      <th scope="col">Name</th>  
      <th scope="col">Email</th>
      <th scope="col">Role  </th>
      <th scope="col">delete</th>
      
        
    </tr>
  </thead>
  <tbody>
   
  @foreach($users as $user)
    <tr>
<!--img src="{{ URL::to('/') }}/images/{{ $user->image }}"-->
    <th scope="row"><img src="{{asset('avatar\1.png')}}" class="img-thumbnail" width="50px"  > </th>
      
      <th scope="row">{{$user->name}}</th>
      

      <th scope="row">{{$user->email}}</th>

      <td>
        @if ($user->admin)
       
        <a href="{{route('user.not.admin',['id'=>$user->id])}}"> delete admin</a>

        @else
        
      <a href="{{route('users.admin',['id'=>$user->id])}}"> make admin</a>
            
        @endif
      </td>


      <td>
       
      </td>


      <!--
      <td><a href=""><img src="https://img.icons8.com/pastel-glyph/25/000000/edit.png"/></a></td>
      <td><a href=""><img src="https://img.icons8.com/material-outlined/20/000000/delete-forever.png"/></a></td>
   
   -->
    </tr>
  @endforeach
@else 

<p class="text-center">Oops!! No users To Show </p>
  
  @endif
   
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 