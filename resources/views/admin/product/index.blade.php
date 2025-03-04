@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Products</h1>
    </div>
    <div class="card-body">
        <table class="table table-borderd table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->selling_price }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/products/'.$item->image) }}" width="200" alt="image here">
                    </td>
                    <td>
                        <a href="{{ route('edit.product',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('delete.product',$item->id) }}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
