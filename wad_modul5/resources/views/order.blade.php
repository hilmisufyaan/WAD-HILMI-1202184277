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

    @if ($message = Session::get('sukses'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if (count($products) === 0)
        <div class="text-center mt-5">
            <p>There is no data</p>
            <a href="/product/create" class="btn btn-dark">Add Data</a>
        </div>
    @else
        <h3 class="text-center mt-5 mb-4">Order</h3>
        <div class="container">
            <div class="card-deck">
                @foreach($products as $product)
                    <div class="card" style="width: 5rem;">
                        <img src="{{ asset('images/jordan.jpg') }}"
                            class="card-img-top" width="10">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text" style="font-size: 2em;">
                                ${{ $product->price }}
                            </p>
                            <a href="{{ route('order.show', $product->id) }}" class="btn btn-success">Order Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</body>
</html>