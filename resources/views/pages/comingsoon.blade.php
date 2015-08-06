@extends('app')

@section('page_title', 'Coming Soon!')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 text-center col-md-offset-1">
            <h1 class="logo">Drink Local KC</h1>
            <hr>
            <p class="lead">
                DrinkLocalKC is the only happy hour app created by, and run by locals. No more sifting through loads of
                useless or out of date information that you don't care about.
            </p>
            <p class="lead">
                We are dedicated to providing you the most accurate and up to date happy hour information in the Kansas City Metro Area.
                Find the best happy hour details for local restaurants and bars based on your GPS location or you can utilize our custom
                search filters to find your perfect happy spot!
            </p>
            <hr>
            <ul class="list-inline social-links">
                <li data-toggle="tooltip" data-placement="top" title="Follow us on Twitter">
                    <a href="https://twitter.com/DrinkLocalKC" class="twitter-link" target="_blank"><i class="fa fa-twitter fa-4x"></i></a></li>
                <li data-toggle="tooltip" data-placement="top" title="Find us on Facebook">
                    <a href="https://www.facebook.com/DrinkLocalKC" class="facebook-link" target="_blank"><i class="fa fa-facebook fa-4x"></i></a></li>
                <li data-toggle="tooltip" data-placement="top" title="Follow us on Instagram">
                    <a href="https://instagram.com/drinklocalkc/" class="instagram-link" target="_blank"><i class="fa fa-instagram fa-4x"></i></a></li>
            </ul>


        </div>
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <p class="notified">Would you like to be notified when we update? Enter your email address below!</p>
                    @if(Session::has('errors'))
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @else
                        {!! Form::open(['method' => 'POST', 'route' => 'home', 'class' => 'form-group']) !!}

                            <div class="form-group">
                                {!! Form::label('email', 'Enter your email address for updates', ['class' => 'sr-only']) !!}
                                {!! Form::text('email', null, ['class' => 'form-control text-input text-email', 'placeholder' => 'Enter your email address!']) !!}
                            </div>
                            <button type="submit" class="btn btn-info">Notify Me!</button>

                        {!! Form::close() !!}
                    @endif
            </div>
        </div>

    </div>
</div>

@stop