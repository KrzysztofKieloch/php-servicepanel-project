@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8" style="text-align: left; font-size: 35px;">
                <strong>LISTA NAPRAW</strong>
            </div>
            <div class="col-4" style="text-align: right; font-size: 35px">
                <a class="float-center" style="text-align: center" href="{{route('repairs.create')}}">
                    <button type="button" class="btn btn-dark">Dodaj naprawę</button>
                </a>
            </div>
        </div>
        <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"><strong>ID</strong></th>
                <th scope="col"><strong>Urządzenie</strong></th>
                <th scope="col"><strong>Usterka</strong></th>
                <th scope="col"><strong>Cena</strong></th>
                <th scope="col"><strong>Opis</strong></th>
                <th scope="col"><strong>Folia ochronna</strong></th>
                <th scope="col" style="text-align: center"><strong>Akcje</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($repairs as $repair)
                <tr>
                    <th scope="row">{{$repair->id}}</th>
                    <td>{{$repair->device}}</td>
                    <td>{{$repair->service}}</td>
                    <td>{{$repair->price}}</td>
                    <td>{{$repair->description}}</td>
                    <td>{{$repair->protectivefilm}}</td>
                    <td style="text-align: center">
                        <a href="{{route('repairs.show', $repair->id)}}" style="text-decoration: none">
                            <button class="btn btn-primary btn-sm">
                                {{ __('Podgląd') }}
                            </button>
                        </a>
                        <a href="{{route('repairs.edit', $repair->id)}}" style="text-decoration: none">
                            <button class="btn btn-success btn-sm">
                                {{ __('Edytuj') }}
                            </button>
                        </a>
                        <button class="btn btn-danger btn-sm delete" data-id="{{$repair->id}}">
                            {{ __('Usuń') }}
                        </button>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
            {{$repairs->links()}}
        </div>
    </div>
@endsection
@section('javascript')
    $(function() {
        $('.delete').click(function() {
            Swal.fire({
                title: 'Czy na pewno chcesz usunąć naprawę?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tak',
                cancelButtonText: 'Nie'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: 'DELETE',
                        url: 'http://localhost:8000/repairs/' + $(this).data('id')
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
