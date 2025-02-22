@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Categories</h1>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" width="200" alt="image here">
                    </td>
                    <td>
                        <a href="{{ route('edit.prod', $item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('delete.prod', $item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
