@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Podgląd naprawy</strong>
                    </div>

                    <div class="card-body">
                            <div class="row mb-3">
                                <label for="device" class="col-md-4 col-form-label text-md-end">Urządzenie</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control" value="{{$price->device}}" name="device" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end">Usterka</label>

                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control" value="{{$price->service}}" name="service" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" value="{{$price->price}}" name="price" disabled>
                                </div>
                            </div>
                        <div class="row mb-3">
                            <div class="row-cols-md-2">
                                <img src="{{asset('storage/' . $price->picture_path)}}" class="img-fluid mx-auto d-block" alt="image">
                            </div>
                        </div>
                        <div class="col-md-12 offset-md-4">
                            <a href="{{route('prices.index')}}" style="text-decoration: none">
                                <button type="button" class="btn btn-outline-dark offset-md-0">
                                    {{ __('Wróć') }}
                                </button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
