<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function report(Request $request)
{
    // Filter dan sort berdasarkan permintaan pengguna
    $query = Product::query();

    // Filter berdasarkan harga minimum dan maksimum
    if ($request->has('min_price') && $request->has('max_price')) {
        $query->whereBetween('price', [$request->min_price, $request->max_price]);
    }

    // Sort berdasarkan kolom yang dipilih
    if ($request->has('sort_by') && in_array($request->sort_by, ['name', 'price', 'stock'])) {
        $sortDirection = $request->has('sort_direction') ? $request->sort_direction : 'asc';
        $query->orderBy($request->sort_by, $sortDirection);
    }

    $products = $query->get();

    // Executive summary: menghitung total produk dan rata-rata harga
    $summary = [
        'total_products' => $products->count(),
        'average_price' => $products->avg('price'),
        'total_stock' => $products->sum('stock')
    ];

    return view('reports.product_report', compact('products', 'summary'));
}

public function whatIfAnalysis()
{
    $products = Product::selectRaw('category, AVG(price) as avg_price, SUM(stock) as total_stock')
        ->groupBy('category')
        ->get();

    return view('reports.what_if_analysis', compact('products'));
}

}

