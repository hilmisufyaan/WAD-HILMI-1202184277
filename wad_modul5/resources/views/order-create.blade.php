<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('nav')

    <h3 class="text-center mt-5">Order</h3>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="d-flex flex-column">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card d-flex flex-row">
            <img src="{{ asset($product->img_path) }}" class="card-img-top" style="width: 50%">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">Stock : {{$product->stock}}</p>
                <p class="card-text" style="font-size: 2em;">${{$product->price}}</p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <h3 class="text-center p-3">Buyer Information</h3>
            <div class="card-body">
                <form method="post" action="{{ route('order.store') }}">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" class="form-control" id="nama" name="buyer_name">
                    </div>
                    <div class="form-group">
                        <label for="nama">Contact</label>
                        <input type="text" class="form-control" id="nama" name="buyer_contact">
                    </div>
                    <div class="form-group">
                        <label for="nama">Quantity</label>
                        <input type="text" class="form-control" id="nama" 
                            name="amount" style="width: 30%">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>