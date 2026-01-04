@extends('admin.layouts.app')
@section('title', 'Stock Log')
@section('content')
<h3>Edit Stock Log</h3>

<form method="POST"
    action="{{ route('admin.stock-logs.update', $stockLog->id) }}">
@csrf
@method('PUT')

<select name="product_id" class="form-control mb-2">
    @foreach($products as $product)
        <option value="{{ $product->id }}"
            {{ $stockLog->product_id == $product->id ? 'selected' : '' }}>
            {{ $product->name }}
        </option>
    @endforeach
</select>

<select name="type" class="form-control mb-2">
    <option value="in" {{ $stockLog->type == 'in' ? 'selected' : '' }}>IN</option>
    <option value="out" {{ $stockLog->type == 'out' ? 'selected' : '' }}>OUT</option>
</select>

<input type="number" name="qty"
    value="{{ $stockLog->qty }}"
    class="form-control mb-2">

<input type="text" name="note"
    value="{{ $stockLog->note }}"
    class="form-control mb-2">

<button class="btn btn-primary">Update</button>
</form>
@endsection
