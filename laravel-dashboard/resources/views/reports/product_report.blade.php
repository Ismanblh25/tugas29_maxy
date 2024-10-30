@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Report</h2>

    <!-- Filter Form -->
    <form action="{{ route('report') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col">
                <label>Min Price</label>
                <input type="number" name="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}">
            </div>
            <div class="col">
                <label>Max Price</label>
                <input type="number" name="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}">
            </div>
            <div class="col">
                <label>Sort By</label>
                <select name="sort_by" class="form-control">
                    <option value="name">Name</option>
                    <option value="price">Price</option>
                    <option value="stock">Stock</option>
                </select>
            </div>
            <div class="col">
                <label>Sort Direction</label>
                <select name="sort_direction" class="form-control">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mt-4">Filter</button>
            </div>
        </div>
    </form>

    <!-- Executive Summary -->
    <div class="mb-4">
        <h4>Executive Summary</h4>
        <p>Total Products: {{ $summary['total_products'] }}</p>
        <p>Average Price: {{ number_format($summary['average_price'], 2) }}</p>
        <p>Total Stock: {{ $summary['total_stock'] }}</p>
    </div>

    <!-- Product Report Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
