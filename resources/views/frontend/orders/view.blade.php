@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="white-text">Order View</h4>
            <a href="{{ url('my-orders') }}" class="btn btn-warning text-white float-end">Back</a>
        </div>
        <div class="card-body row">
            <div class="col-md-6">
                <h4>Shipping Details</h4>
                <hr>
                <label for="">First Name:</label>
                <div class="border p-2">{{ $orders->fname }}</div>
                <label for="">Last Name:</label>
                <div class="border p-2">{{ $orders->lname }}</div>
                <label for="">Email:</label>
                <div class="border p-2">{{ $orders->email }}</div>
                <label for="">Contact No.:</label>
                <div class="border p-2">{{ $orders->phone }}</div>
                <label for="">Shipping Address:</label>
                <div class="border p-2">
                    {{ $orders->address1 }}, <br> {{ $orders->address2 }},<br> {{ $orders->city }},<br> {{ $orders->state }},<br> {{ $orders->country }}<br>
                </div>
                <label for="">Zip Code:</label>
                <div class="border p-2">{{ $orders->pincode }}</div>
            </div>

            <div class="col-md-6">
                <h4>Order Details</h4>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->orderitems as $item)
                        <tr>
                            <td>{{ $item->products->name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" width="50px" alt="Product Image">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4> Grand Total : <span class="float-end"> {{ $orders->total_price }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection
