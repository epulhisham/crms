@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src={{ asset('img/1.jpg') }} alt="img1"  width="100%">
                      <div class="carousel-caption">
                        <h3>Available 24/7</h3>
                        <p>Drive by the minute, hour or day.</p>
                      </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/2.jpg') }} alt="img2" width="100%">
                        <div class="carousel-caption">
                          <h3>Cost Effective</h3>
                          <p> Pay for only what you need.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/3.jpg') }} alt="img3" width="100%">
                        <div class="carousel-caption">
                          <h3>Drive As Far As You Want.</h3>
                          <p> 
                            Begin Now.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <br><br><br>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9 text-center">
            <div class="card" data-aos="fade-up">
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h1 class="display-2">
                                Welcome to Car Rental Management System
                            </h1>
                            <br>
                            <div class="col-md-12 mt-3">
                                <p class="p">
                                    Discover flexible connectivity by renting a car hourly, daily, weekly, or even monthly anywhere in Malaysia
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9 mt-5">
            <div class="card" data-aos="fade-right">
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <h1 class="display-2">
                                <br><br><br>
                                Don't know how to rent our cars?
                            </h1>
                            <br>
                            <div class="col-md-12 mt-3">
                                <p class="p">
                                   It's very easy , just follow our steps
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <h5>Step 1: Click on Cars on a top navigation bar</h5>
                                        <div class="row">
                                            <div class="col-md-12 mt-3 text-center">
                                                <img src={{ asset('img/step1.jpg') }} alt="step1" width="30%"> 
                                            </div>
                                        </div>
                                    <br>
                                    <h5>Step 2: Choose any cars you would like to rent</h5>
                                        <div class="row">
                                            <div class="col-md-12 mt-3 text-center">
                                                <img src={{ asset('img/step2.jpg') }} alt="step2" width="50%"> 
                                            </div>
                                        </div>
                                    <br>
                                    <h5>Step 3: Click on 'Select This Car' Button</h5>
                                        <div class="row">
                                            <div class="col-md-12 mt-3 text-center">
                                                <img src={{ asset('img/step3.jpg') }} alt="step3" width="35%"> 
                                            </div>
                                        </div>
                                    <br>
                                    <h5>Step 4: It will go to our whatsapp, you may start to fill the questions given</h5> 
                                        <div class="row">
                                            <div class="col-md-12 mt-3 text-center">
                                                <img src={{ asset('img/step4.jpg') }} alt="step4" width="35%"> 
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
            <h1 class="display-4">
                Choose Your Desire Car to Rent
            </h1>
            <div class="row" data-aos="fade-up">
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="cold-md-12 px-3">
                            <img src={{ asset('img/aruzpi.jpg') }} alt="aruz" width="100%">
                            <div class="row">
                                <div class="col-md-12 mt-4 text-center">
                                    ARUZ
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row justify-content-start">
                                                                <div class="col-md-12">
                                                                    <b>Price</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Transmission</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Car Type</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Seating</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="row justify-content-end">
                                                                 <div class="col-md-12">
                                                                     RM 15/hour
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     Automatic
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     MPV
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     7 Seats
                                                                 </div>
                                                             </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-12 text-center">
                                                    <a href="https://wa.link/v1lo0k" class="btn btn-dark"> Select This Car</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="cold-md-12 px-3">
                            <img src={{ asset('img/ativa.jpg') }} alt="ativa" width="100%">
                            <div class="row">
                                <div class="col-md-12 mt-4 text-center">
                                    ATIVA
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row justify-content-start">
                                                                <div class="col-md-12">
                                                                    <b>Price</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Transmission</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Car Type</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Seating</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="row justify-content-end">
                                                                 <div class="col-md-12">
                                                                     RM 10/hour
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     Automatic
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     SUV
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     5 Seats
                                                                 </div>
                                                             </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-12 text-center">
                                                    <a href="https://wa.link/j0kdm3" class="btn btn-dark"> Select This Car</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="cold-md-12 px-3">
                            <img src={{ asset('img/axia_1.jpg') }} alt="axia" width="100%">
                            <div class="row">
                                <div class="col-md-12 mt-4 text-center">
                                    AXIA
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row justify-content-start">
                                                                <div class="col-md-12">
                                                                    <b>Price</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Transmission</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Car Type</b>
                                                                </div>
                                                                <div class="col-md-12 mt-4">
                                                                    <b>Seating</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="row justify-content-end">
                                                                 <div class="col-md-12">
                                                                     RM 6/hour
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     Automatic
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     Economy Car
                                                                 </div>
                                                                 <div class="col-md-12 mt-4">
                                                                     5 Seats
                                                                 </div>
                                                             </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-12 text-center">
                                                    <a href="https://wa.link/n1qshj" class="btn btn-dark"> Select This Car</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5" data-aos="fade-up">
        <div class="col-md-12 text-center">
            <a href="cars" class="btn btn-dark">See all cars</a>
        </div>
    </div>
</div>

@endsection