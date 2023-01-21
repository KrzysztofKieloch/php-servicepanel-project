@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <div class="col-12" style="text-align: center; font-size: 30px">
                            <div style="text-align: center;">
                                <strong>DODAJ NAPRAWĘ</strong>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('repairs.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="device" class="col-md-4 col-form-label text-md-end">Urządzenie</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control @error('device') is-invalid @enderror" value="{{old('device')}}" name="device" required autocomplete autofocus>

                                    @error('device')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end">Usterka</label>

                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" value="{{old('service')}}" name="service" required autocomplete autofocus>

                                    @error('service')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" name="price" required autocomplete autofocus>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" autocomplete autofocus> {{old('description')}} </textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="protectivefilm" class="col-md-4 col-form-label text-md-end">Folia ochronna</label>

                                <div class="col-md-6">
                                    <select id="device" type="text" class="form-control
                                            @error('protectivefilm') is-invalid @enderror "value="{{old('protectivefilm')}}" name="protectivefilm" required autocomplete autofocus>
                                        <option>nie</option>
                                        <option>tak</option>
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <a href="{{route('home')}}" style="text-decoration: none">
                                    <button type="button" class="btn btn-outline-dark offset-md-0">
                                        {{ __('Wróć') }}
                                    </button>
                                    </a>
                                    <button type="submit" class="btn btn-outline-success">
                                        {{ __('Dodaj') }}
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
