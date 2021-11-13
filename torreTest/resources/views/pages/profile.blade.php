@extends('layout.master')

@section('title', 'Profile Page')

@section('pageHeader', 'Profile')

@section('content')

<!-- Display the user profile picture and summary -->
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="{{ $data['person']['picture'] }}" class="img-fluid circle" alt="Profile Picture">
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                <h3>{{ $data['person']['name'] }}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $data['person']['professionalHeadline'] }}</h5>
                <p class="card-text"> {{ $data['person']['summaryOfBio'] }} </p>
            </div>
        </div>
    </div>
</div>

<!-- card to show skills -->
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3>Skills</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($data['strengths'] as $skill)
                        <div class="col-md-6">
                            <h5>{{ $skill['name'] }}</h5>
                            <ul>
                                <li>Proficiency: {{ $skill['proficiency'] }}</li>
                                <li>Weight: {{ $skill['weight'] }}</li>
                                <li>Recommendations: {{ $skill['recommendations'] }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div>{{dd($data)}}</div> -->


@endsection
