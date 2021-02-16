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
                <div class="card">
                    <div class="card-header">All Food</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Image</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($foods)>0)
                                @foreach($foods as $key=>$food)
                                    <tr>
                                        <td><img src="{{asset('images')}}/{{$food->image}}" width="100"></td>
                                        <td>{{$food->name}}</td>
                                        <td>{{$food->description}}</td>
                                        <td>${{$food->price}}</td>
                                        <td>{{$food->category->name}}</td>
                                        <td><a href="{{route('food.edit',[$food->id])}}"><button class="btn btn-outline-success">Edit</button></a></td>
                                        <td>
                                            <button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <td class="alert-success">No Food to Display</td>
                            @endif
                            </tbody>
                        </table>
                        <br>
                        <span>
                        {{$foods->links()}}
                        </span>
                        <style>
                            .shadow-sm{display: none!important;}
                            .text-sm{margin-top: 2em!important;}
                        </style>
                    </div>
                </div>
                <a class="btn btn-outline-secondary btn-group-sm" href="{{url('food/create')}}">Add New Item</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Are You Sure You Wants to Delete this Item ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form method="post" action="{{route('food.destroy',[$food->id])}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
