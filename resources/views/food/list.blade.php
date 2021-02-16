@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($categories as $data)
            <div class="col-md-12">
                <h2 style="color: green">{{$data->name}}</h2>
                <div class="jumbotron">
                    <div class="row">
                        @foreach(App\Models\Food::where('category_id',$data->id)->get() as $food)
                        <div class="col-md-3">

                            <img src="{{asset('images')}}/{{$food->image}}" width="200" height="155">
                            <p class="text-center">{{$food->name}}
                                <span>${{$food->price}}</span>


                            </p>
                            <p class="text-center btn btn-outline-primary"><a  style="color: black" href="{{route('food.name',[$food->id])}}">view</a></p>
                        </div>

                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
