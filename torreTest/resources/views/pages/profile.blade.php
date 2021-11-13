@extends('layout.master')

@section('title', 'Profile Page')

@section('pageHeader', 'Profile')

@section('content')

<!-- Display the user profile picture and summary -->
<div class="row">
    @foreach($data as $profile)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $profile['picture'] }}" class="img-fluid rounded" alt="Profile Picture">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   
                </div>
            </div>
        </div>
    @endforeach

@endsection
