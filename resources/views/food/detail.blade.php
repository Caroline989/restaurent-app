@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Product Image</div>
                        <img src="{{asset('images')}}/{{$view->image}}" class="img-responsive">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                        <p>
                            {{$view->name}}</p>
                            <p class="lead">{{$view->description}}</p>
                            <p>${{$view->price}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
