@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edytuj naprawę</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('repairs.update', $repair->id) }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="device" class="col-md-4 col-form-label text-md-end">Urządzenie</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control" value="{{$repair->device}}" name="device" required autocomplete autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end">Usterka</label>

                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control" value="{{$repair->service}}" name="service" required autocomplete autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" value="{{$repair->price}}" name="price" required autocomplete autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control" name="description" autocomplete autofocus> {{$repair->description}} </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="protectivefilm" class="col-md-4 col-form-label text-md-end">Folia ochronna</label>

                                <div class="col-md-6">
                                    <input id="device" type="text" class="form-control" value="{{$repair->protectivefilm}}" name="protectivefilm" required autocomplete autofocus>

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edytuj
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
