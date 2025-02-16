@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ $category->name }}</h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $category->name }}</h2>
                <div class="row">
                    @foreach ($products as $prod)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="{{ route('view.product', ['cate_slug' => $category->slug, 'prod_slug' => $prod->slug]) }}">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="{{ $prod->name }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $prod->name }}</h5>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted text-decoration-line-through">${{ number_format($prod->original_price, 2) }}</span>
                                        <span class="fw-bold">${{ number_format($prod->selling_price, 2) }}</span>
                                    </div>
                                </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
