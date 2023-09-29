@extends('layout')

@section('products')


    <h3>Product Information</h3>
    <table border="2px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Screen Size</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['brand'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['screen_size'] }}</td>
                    <td>{{ $product['processor'] }}</td>
                    <td>{{ $product['ram'] }}</td>
                    <td>{{ $product['storage'] }}</td>
                    <td>{{ $product['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
