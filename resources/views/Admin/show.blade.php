@extends('layouts/master')



@section('content')
<div class="container my-3 d-grid">
  <a class="btn btn-primary" href="/addnew">ADD NEW</a>
</div>
<div class="div container">
    <div class="div row">
    <table class="table table-info">
  <thead>
    <tr class="text-center">
      <th scope="col">States</th>
      <th scope="col">Active</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deceased</th>
      <th scope="col">Confirmed</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datas as $user)
          <tr>
            <td class="text-center">{{ $user->states}}</td>
            <td class="text-center">{{ $user->active}}</td>
            <td class="text-center">{{ $user->recovered}}</td>
            <td class="text-center">{{ $user->deceased}}</td>
            <td class="text-center">{{ $user->confirmed}}</td>
            <td class="text-center"><a class="btn btn-primary" href="/edit/{{$user->id}}">Edit</a>
             <a class="btn btn-primary" href="/delete/{{$user->id}}">Delete</a>
            </td>
          </tr>
          @endforeach
  </tbody>
</table>

    </div>
</div>

@endsection