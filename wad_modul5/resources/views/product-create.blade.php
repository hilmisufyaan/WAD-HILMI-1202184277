<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    @include('nav')

    <h3 class="text-center mt-5 mb-4">Input Product</h3>
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
        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="nama">Product Name</label>
                <input type="text" class="form-control" id="nama" name="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$USD</div>
                    </div>
                <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Description</label>
                <textarea class="form-control" name="description" id="deskripsi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="stok">Stock</label>
                <input type="text" class="form-control" id="stok" name="stock" style="width: 30%">
            </div>
            <div class="form-group">
                <label for="gambar">Image File Input</label>
                <br>
                <input type="file" id="gambar" name="img_path">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>
</html>