@extends('layouts.app')

@section('content')
<div class="container">
    <h2>What-If Analysis</h2>
    
    <!-- Pivot Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category</th>
                <th>Average Price</th>
                <th>Total Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->category }}</td>
                    <td>{{ number_format($product->avg_price, 2) }}</td>
                    <td>{{ $product->total_stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
