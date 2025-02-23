@extends('layouts.front')

@section('title')
Checkout
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic Details</h6>
                    <hr>
                    <form action="{{ url('place-order') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="address1">Address 1</label>
                                <input type="text" name="address1" class="form-control" placeholder="Enter Address 1" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="address2">Address 2</label>
                                <input type="text" name="address2" class="form-control" placeholder="Enter Address 2">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" placeholder="Enter State" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="country">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="Enter Country" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="pincode">Pin Code</label>
                                <input type="text" name="pincode" class="form-control" placeholder="Enter Pin Code" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>Order Details</h6>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitems as $item)
                            <tr>
                                <td>{{ $item->products->name }}</td>
                                <td>{{ $item->prod_qty }}</td>
                                <td>{{ $item->products->selling_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-primary float-end">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
