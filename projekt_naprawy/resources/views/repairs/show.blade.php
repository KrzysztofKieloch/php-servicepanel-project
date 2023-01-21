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
                                    <input id="device" type="text" class="form-control" value="{{$repair->device}}" name="device" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end">Usterka</label>

                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control" value="{{$repair->service}}" name="service" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" value="{{$repair->price}}" name="price" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <textarea id="description" maxlength="1500" type="text" class="form-control" name="description" disabled> {{$repair->description}} </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="protectivefilm" class="col-md-4 col-form-label text-md-end">Folia ochronna</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control" value="{{$repair->protectivefilm}}" name="protectivefilm" disabled>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
