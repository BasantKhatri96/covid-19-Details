@extends('layouts/master')

@section('content')
<div class="container">
            <div class="row col-6 mx-auto">
                <div class="mb-3 ">
                    <h1 class="text-center">UPDATE DATA</h1>
                        
                            <div class="row">
                                <form action="/update" method="POST">
                                            @csrf
                                            <div class="form-group"></div>
                                                    <input type="hidden" class="form-control" name="id" id="exampleFormControlInput1" placeholder="state name" value="{{$datas->id}}">
                                                </div>

                                                <div class="form-group"></div>
                                                    <label for="exampleFormControlInput1" class="form-label">States</label>
                                                    <input type="text" class="form-control" name="states" id="exampleFormControlInput1" placeholder="state name" value="{{$datas->states}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="form-label">Active Cases</label>
                                                    <input type="text" class="form-control" name="activecases" id="exampleFormControlInput1" placeholder="Number of active cases" value="{{$datas->active}}">

                                                </div>

                                                <div class="form-group>">
                                                    <label for="exampleFormControlInput1" class="form-label">Recovered</label>
                                                    <input type="text" class="form-control" name="recovered" id="exampleFormControlInput1" placeholder="Number of recovered" value="{{$datas->recovered}}">
                                                    

                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="form-label">Deceased</label>
                                                    <input type="text" class="form-control" name="deceased" id="exampleFormControlInput1" placeholder="Number of Deceased" value="{{$datas->deceased}}">
                                                    

                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="form-label">Confirmed</label>
                                                    <input type="text" class="form-control" name="confirmed" id="exampleFormControlInput1" placeholder="number of confirmed cases" value="{{$datas->confirmed}}">
                                                    
                                                    
                                                </div>
                                                <br>
                                                <br>    
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="row mx-auto mt-4 mb-4">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                </form>
                            </div>
                </div>  
            </div>
</div>     
@endsection