@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="col-12" style="font-size: 50px; text-align: center">CENNIK USŁUG</div>
        <div class="col-12" style="text-align: right; font-size: 35px">
            <a class="float-center" style="text-align: center; text-decoration: none" href="{{route('prices.create')}}">
                <button type="button" class="btn btn-dark">Dodaj usługę</button>
            </a>
            <a class="float-center" style="text-align: center; text-decoration: none" href="{{route('prices.index')}}">
                <button type="button" class="btn btn-danger" >Usuń usługę</button>
            </a>
            <a class="float-center" style="text-align: center" href="{{route('prices.index')}}">
                <button type="button" class="btn btn-success">Lista usług</button>
            </a>
        </div>
        </br>
        <div class="row">
            <div class="col-md-8 order-md-6 col-lg-12">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($prices as $price)
                        <div class="col-2 col-md-2 col-lg-4 mb-3">
                            <div class="card h-100 border-0">
                                <div class="card-img-top">
                                    <img src="{{asset('storage/' . $price->picture_path)}}" class="img-fluid mx-auto d-block" alt="image">
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="card-title">
                                        <a href="{{route('prices.edit', $price->id)}}" class=" font-weight-bold text-dark" style="font-family: 'Nunito', sans-serif; text-decoration: none"><strong>{{$price->service}} - {{$price->device}}</strong></a>
                                    </h4>
                                    <h5 style="font-family: 'Nunito', sans-serif;">
                                        {{$price->price}}zł
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
