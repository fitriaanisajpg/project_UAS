<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StockLog;
use App\Models\Product;
use Illuminate\Http\Request;

class StockLogController extends Controller
{
    public function index()
    {
        $logs = StockLog::with(['product', 'user'])
            ->latest()
            ->get();

        return view('admin.stock_logs.index', compact('logs'));
    }

    public function create(Request $request)
    {
        $products = Product::all();
        $selectedProduct = $request->product_id ?? null;

        return view('admin.stock_logs.create', compact('products', 'selectedProduct'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type'       => 'required|in:IN,OUT',
            'quantity'   => 'required|integer|min:1',
            'note'       => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($request->type === 'IN') {
            $product->stock += $request->quantity;
        } else {
            $product->stock -= $request->quantity;

            if ($product->stock < 0) {
                return back()->withErrors([
                    'quantity' => 'Stok tidak boleh kurang dari 0'
                ]);
            }
        }

        $product->save();

        StockLog::create([
            'product_id' => $request->product_id,
            'type'       => $request->type,
            'quantity'   => $request->quantity,
            'note'       => $request->note,
            'user_id'    => auth()->id(),
        ]);

        return redirect()
            ->route('admin.stock-logs.index')
            ->with('success', 'Stock log berhasil ditambahkan');
    }
}
