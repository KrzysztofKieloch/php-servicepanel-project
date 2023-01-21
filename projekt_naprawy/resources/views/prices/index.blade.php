@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8" style="text-align: left; font-size: 35px;">
                <strong>CENNIK</strong>
            </div>
            <div class="col-4" style="text-align: right; font-size: 35px">
                <a class="float-center" style="text-align: center" href="{{route('prices.create')}}">
                    <button type="button" class="btn btn-dark">Dodaj usługę</button>
                </a>
            </div>
        </div>
        <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"><strong>ID</strong></th>
                <th scope="col"><strong>Zdjęcie</strong></th>
                <th scope="col"><strong>Urządzenie</strong></th>
                <th scope="col"><strong>Usterka</strong></th>
                <th scope="col"><strong>Cena</strong></th>
                <th scope="col" style="text-align: center"><strong>Akcje</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($prices as $price)
                <tr>
                    <th scope="row">{{$price->id}}</th>
                    <td>{{$price->picture_path}}</td>
                    <td>{{$price->device}}</td>
                    <td>{{$price->service}}</td>
                    <td>{{$price->price}}</td>
                    <td style="text-align: center">
                        <a href="{{route('prices.show', $price->id)}}" style="text-decoration: none">
                            <button class="btn btn-primary btn-sm">
                                {{ __('Podgląd') }}
                            </button>
                        </a>
                        <a href="{{route('prices.edit', $price->id)}}" style="text-decoration: none">
                            <button class="btn btn-success btn-sm">
                                {{ __('Edytuj') }}
                            </button>
                        </a>
                        <button class="btn btn-danger btn-sm delete" data-id="{{$price->id}}">
                            {{ __('Usuń') }}
                        </button>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            {{ $prices->links() }}
        </div>
    </div>
@endsection
@section('javascript')
    $(function() {
        $('.delete').click(function() {
            Swal.fire({
                title: 'Czy na pewno chcesz usunąć usługę?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tak',
                cancelButtonText: 'Nie'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: 'DELETE',
                        url: 'http://localhost:8000/prices/' + $(this).data('id')
                    })
                    .done(function(response){
                        window.location.reload();
                    })
                    .fail(function(response){
                       alert("ERROR");
                    });
                }
            })
        })
    })
@endsection
