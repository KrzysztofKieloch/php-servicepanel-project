@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <div class="col-12" style="text-align: center; font-size: 30px">
                            <div style="text-align: center;">
                                <strong>DODAJ USŁUGĘ I CENĘ</strong>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('prices.store') }}" enctype="multipart/form-data">
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
                                    <select id="service" type="text" class="form-control" placeholder="Wybierz usługę" value="{{old('service')}}" name="service" required autocomplete autofocus>
                                        <option>Wymiana wyświetlacza</option>
                                        <option>Wymiana szybki</option>
                                        <option>Wymiana baterii</option>
                                        <option>Wymiana klapki tylnej</option>
                                        <option>Wymiana złącza ładowania</option>
                                        <option>Diagnoza</option>
                                    </select>

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
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" name="price" min="0" required autocomplete autofocus>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="picture_path" class="col-md-4 col-form-label text-md-end ">Zdjęcie</label>

                                <div class="col-md-6">
                                    <input id="picture_path" type="file" class="form-control @error('price') is-invalid @enderror" name="picture_path">

                                    @error('picture_path')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <a href="{{route('prices.pricelist')}}" style="text-decoration: none">
                                    <button type="button" class="btn btn-outline-dark offset-md-0">
                                        {{ __('Wróć') }}
                                    </button>
                                    </a>
                                    <button type="submit" class="btn btn-outline-success submit" onclick="window.location='{{ route("prices.pricelist") }}'">
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
@section('javascript')
    $(function() {
        $('.submit').click(function() {
            Swal.fire({
            icon: 'success',
            title: 'Udało się',
            text: 'Pomyślnie dodano naprawę!',
            })
        })
    })
@endsection
