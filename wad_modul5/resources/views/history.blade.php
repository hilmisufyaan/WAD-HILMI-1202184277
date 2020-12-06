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

    @if (count($order) === 0)
        <div class="text-center mt-5">
            <p>There is no data</p>
            <a href="/product/create" class="btn btn-dark">Add Data</a>
        </div>
    @else
        <h3 class="text-center mt-5 mb-4">History</h3>
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Amount</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($order as $history)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $history->product->name }}</td>
                            <td>{{ $history->buyer_name }}</td>
                            <td>{{ $history->buyer_contact }}</td>
                            <td>{{ $history->amount }}</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</body>
</html>