@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edytuj usługę</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('prices.update', $price->id) }}" enctype="multipart/form-data">
                            @csrf


                            <div class="row mb-3">
                                <label for="device" class="col-md-4 col-form-label text-md-end">Urządzenie</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control" value="{{$price->device}}" name="device" required autocomplete autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end">Usterka</label>

                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control" value="{{$price->service}}" name="service" required autocomplete autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" value="{{$price->price}}" name="price" required autocomplete autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="picture_path" class="col-md-4 col-form-label text-md-end">Zdjęcie</label>

                                <div class="col-md-6">
                                    <input id="picture_path" type="file" class="form-control" name="picture_path" value="{{$price->picture_path}}">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <a href="{{route('prices.pricelist')}}" style="text-decoration: none">
                                        <button type="button" class="btn btn-outline-dark offset-md-0">
                                            {{ __('Wróć') }}
                                        </button>
                                    </a>

                                    <button type="submit" class="btn btn-outline-success" onclick="window.location='{{ route("prices.pricelist") }}'">

                                        {{ __('Edytuj') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
