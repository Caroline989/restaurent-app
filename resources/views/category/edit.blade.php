@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <form method="post" action="{{route('category.update',[$category->id])}}">
                    {{method_field('PUT')}}
                    @csrf
                    <div class="card">
                        <div class="card-header">Update Food Category</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{$category->name}}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary ">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
