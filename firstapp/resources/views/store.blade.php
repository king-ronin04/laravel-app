@extends('layout')

@section('store')

<h2>Items</h2>
<h3>Table</h3>
<table border=2px>
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['brand'] }}</td>
                <td>{{ $product['price'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <h3>Unordered List</h3>
    <ul>
        @foreach ($products as $product)
        <li>{{ $product['name'] }} - {{ $product['brand'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>
    <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  li {
    margin: 0 0 8px 0;
  }
</style>

@stop