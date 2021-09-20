@extends('layouts/master')

@section('content')



        <div class="container">
            <div class="row col-6 mx-auto">
                <div class="mb-3 ">
                    <h1 class="text-center">ADD DATA</h1>
            
                        @if($errors->any())
                        <div class="container">
                            <div class="alert alert-warning" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
           
            <form action="add" method="post">
            @csrf
                <div class="form-group"></div>
                    <label for="exampleFormControlInput1" class="form-label">State</label>
                    <input type="text" class="form-control" name="states" id="exampleFormControlInput1" placeholder="state name" value="{{old('states')}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Active Cases</label>
                    <input type="text" class="form-control" name="activecases" id="exampleFormControlInput1" placeholder="Number of active cases" value="{{old('activecases')}}">

                </div>

                <div class="form-group>">
                    <label for="exampleFormControlInput1" class="form-label">Recovered</label>
                    <input type="text" class="form-control" name="recovered" id="exampleFormControlInput1" placeholder="Number of recovered" value="{{old('recovered')}}">
                    

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Deceased</label>
                    <input type="text" class="form-control" name="deceased" id="exampleFormControlInput1" placeholder="Number of Deceased" value="{{old('deceased')}}">
                    

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Confirmed</label>
                    <input type="text" class="form-control" name="confirmed" id="exampleFormControlInput1" placeholder="number of confirmed cases" value="{{old('confirmed')}}">
                    
                    
                </div>
                <br>
                <br>    
                <div class="form-group">
                    <div class="row mx-auto my-4 ">
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>
                    <a href="/admindashboard" class="btn btn-success"><i class="fas fa-arrow-left" aria-hidden="true">BACK</i></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection