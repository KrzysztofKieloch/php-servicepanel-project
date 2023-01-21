@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="select-devices">
                <div class="wrap active_choice_box" id="choice-box-models" style="justify-content: center;">

                    <button class="row" style="cursor: pointer;" onclick="window.location='{{ route("repairs.create") }}'">
                        <img src="/photos/repairing.png" alt=""></br>
                        <strong>Dodaj naprawę</strong>
                    </button>
                    <button class="row" style="cursor: pointer;" onclick="window.location='{{ route("repairs.index") }}'">
                        <img src="/photos/data.png" alt=""></br>
                        <strong>Lista napraw</strong>
                    </button>
                    <button class="row" style="cursor: pointer;" onclick="window.location='{{ route("prices.create") }}'">
                        <img src="/photos/remote.png" alt=""></br>
                        <strong>Dodaj cenę<strong>
                    </button>
                </div>
        </div>
    </div>
@endsection
