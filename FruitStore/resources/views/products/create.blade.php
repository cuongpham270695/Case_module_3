@extends('home')
@section('title','Add new product')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Add new product</h2>
            </div>
            <div class="col-12">
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Product name
                            <input type="text" class="form-control" id="inputName" name="inputName" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description
                            <textarea type="text" class="form-control" id="inputDescription" name="inputDescription"
                                      required></textarea>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Price
                            <input type="number" class="form-control" id="inputPrice" name="inputPrice" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputFile">Image
                            <input class="form-control-file" id="inputFile" name="image" type="file">
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('products.list')}}">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
