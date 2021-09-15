@extends('home')
@section('title','Product list')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h2>Product List</h2>
            </div>
            <div class="col-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check"
                           aria-hidden="true"></i>{{\Illuminate\Support\Facades\Session::get('success')}}
                    </p>
                @endif
            </div>
            <a href="{{route('products.create')}}">Add new product</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th colspan="2" style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $key => $product)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>${{$product->price}}</td>
                        <td>
                            @if($product->image)
                                <img src="{{asset('storage/images/'.$product->image)}}" alt="" style="width: 150px">
                            @else
                                {{"Don't have image!"}}
                            @endif
                        </td>
                        <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><a href="{{route('products.destroy',$product->id)}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure to delete this product ?')">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td>Don't have any product</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
