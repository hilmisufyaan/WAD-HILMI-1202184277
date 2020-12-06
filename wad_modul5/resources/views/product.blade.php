<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
        <h3 class="text-center mt-5 mb-4">List Product</h3>
        <div class="container">
            <a href="/product/create" class="btn btn-dark mb-2">Add Data</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>
                                <form action="{{ route('product.destroy',$product->id) }}"         method="POST">
                                    <a href="{{ route('product.edit',$product->id) }}" 
                                        class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</body>
</html>