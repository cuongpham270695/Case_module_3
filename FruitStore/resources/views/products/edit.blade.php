@extends('home')
@section('title','Update product')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h3>Update product</h3></div>
            <div class="col-12">
                <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Product name
                            <input type="text" class="form-control" name="inputName" id="inputName"
                                   value="{{$product->name}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description
                            <textarea name="inputDescription" id="inputDescription" class="form-control"
                                      required>{{$product->description}}</textarea>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Price
                            <input type="number" class="form-control" id="inputPrice" value="{{$product->price}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputFile">Choose image
                            <input type="file" class="form-control-file" id="inputFile" name="image">
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('products.list')}}">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
