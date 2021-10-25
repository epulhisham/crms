@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 mt-5">
                    <h1 class="display-4">
                        Let Us Help You
                    </h1>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="inputFullName">First Name</label>
                                            <input type="text" class="form-control" id="inputFullName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="inputEmail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="inputPhone">Phone</label>
                                            <input type="text" class="form-control" id="inputPhone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputFullName">What can we help?</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
    


@endsection