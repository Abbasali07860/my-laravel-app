@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
<div class="profile-container">
    <div class="panel user-profile-panel">
        <div class="panel-header">
            <h2>Welcome, {{ $user->name }}</h2>
            <p class="email">{{ $user->email }}</p>
        </div>

        <div class="panel-content">
            <div class="info-section">
                <h3>Account Details</h3>
                <ul>
                    <li><strong>Name:</strong> {{ $user->name }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Registered:</strong> {{ $user->created_at->format('d M Y') }}</li>
                </ul>
            </div>

            <div class="stats-section">
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <div>
                        <h4>Total Users</h4>
                        <p>{{ $totalUsers }}</p>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-box"></i>
                    <div>
                        <h4>Products</h4>
                        <p>35</p>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-shopping-cart"></i>
                    <div>
                        <h4>Orders</h4>
                        <p>80</p>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-credit-card"></i>
                    <div>
                        <h4>Payments</h4>
                        <p>56</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
