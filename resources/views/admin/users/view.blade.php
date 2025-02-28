@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 style="margin-bottom: 0.5rem; font-weight: 600;">User Details<a href="{{ url('users') }}" class="btn btn-primary btn-sm float-right">Back</a></h4>
                    </h4>
                    <hr style="margin-top: 0.5rem; margin-bottom: 0; border-color: rgba(255, 255, 255, 0.3);">
                </div>
                <div class="card-body" style="background-color: #f8f9fa; padding: 2rem 1.5rem;">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Role</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">
                                <span style="color: {{ $users->role_as == '0' ? '#28a745' : '#dc3545' }}; font-weight: 500;">
                                    {{ $users->role_as == '0' ? 'User' : 'Admin' }}
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">First Name</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Last Name</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->lname }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Email</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">
                                <span style="color: #0d6efd;">{{ $users->email }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Address 1</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->address1 }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Address 2</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->address2 }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">City</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->city }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">State</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->state }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Country</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">{{ $users->country }}</div>
                        </div>
                        <div class="col-md-4">
                            <label style="font-weight: 600; color: #495057; margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase;">Pin Code</label>
                            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.75rem; background-color: white; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">
                                <span style="font-family: monospace; letter-spacing: 0.1rem;">{{ $users->pincode }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
