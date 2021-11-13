@extends('layout.master')

@section('title', 'Homepage')

@section('pageHeader', 'Welcome to the Homepage')

<!-- content section to contain search box-->
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-12 text-center">
                <div>
                    <form class="text-center" method="post" action="{{ route('search') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group my-3">
                                <legend class="text-center header my-2">Please type in the username in the search box below</legend>
                                @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        <span>{{ Session::get('error') }} </span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group my-3">
                                <div class="col-md-12 text-center">
                                    <input id="username" name="username" type="text" placeholder="Search by Username" class="form-control">
                                </div>
                            </div>

                            <div class="form-group my-3">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
@endsection