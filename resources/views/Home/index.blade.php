@extends('layouts/master')

@section('content')
<div class="hero">
  <div class="container">
    <div class="row">
      <h2 class="text-center mt-2">Recent Updates of Covid Across India</h2>
    </div>
  </div>
  <div class="container">
    <div class="div row">
      <div class="row mt-3 col-12">
        <table class="table table-primary">
          <thead>
            <tr class="">
              <th class="text-right" scope="col">States</th>
              <th scope="col">Active</th>
              <th scope="col">Recovered</th>
              <th scope="col">Deceased</th>
              <th scope="col">Confirmed</th>
              <!-- <th scope="col">Actions</th> -->
            </tr>
          </thead>
          <tbody>
            @foreach($datas as $user)
            <tr>
              <td class="">{{ $user->states}}</td>
              <td class=""><span class="badge bg-warning text-dark">Updated</span>  {{ $user->active}}</td>
              <td class=""><span class="badge bg-success"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>  {{ $user->recovered}}</td>
              <td class=""><span class="badge bg-danger"><i class="fa fa-arrow-down" aria-hidden="true"></i></span> {{ $user->deceased}}</td>
              <td class=""><span class="badge bg-secondary">Total</span>  {{ $user->confirmed}}</td>
              <!-- <td class="text-center"><button type="button" class="btn btn-primary">Edit</button>
  <button type="button" class="btn btn-danger">Delete</button>
              </td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
            
      </div>
    </div>
  </div>
</div>
@endsection
