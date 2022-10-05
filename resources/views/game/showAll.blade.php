@extends('layouts.app')

@push('styles')
<style>
    @keyframes rotate{
        from{
            transform: rotate(0deg)
        }
        to{
            
            transform: rotate(360deg)
        }
    }

    .refresh{
        animation: rotate 1.5s linear infinite;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game</div>

                <div class="card-body">
                   <div class="text-center">
                        <img id="circle" class="refresh" width="250" height="250" src="{{asset('img/circle.png')}}" alt="">
                        <p id="winner" class="display-1 d-none text-primary"> 10</p>
                   </div>
                   <hr>
                   <div class="text-center">
                    <label for="user_bet" class="font-weight-bold">Your bet</label>
                    <select name="" id="user_bet" class="custom-select col-auto">
                        <option selected value="">Not in</option>
                       @foreach(range(1,12) as $number)
                            <option id="{{ $number }}">{{ $number }}</option>
                       @endforeach
                       
                    </select>
                    <hr>
                    <p class="font-weight-bold h5">Remaining time</p>
                    <p id="timer" class="h5 text-danger">Waiting to start</p>
                    <hr>
                    <p class="h1" id="result"></p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
