@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex-1 bg-gray-50 p-8">
        <div class="max-w-7xl mx-auto bg-white p-8 rounded-lg shadow">
            <h1 class="text-3xl font-bold text-indigo-600 mb-4 flex items-center justify-start">
                <i class="fas fa-user-group mr-3 text-indigo-500"></i> Welcome, {{ Auth::user()->name }}
            </h1>
            <p class="text-gray-500 mb-6 text-lg">{{ Auth::user()->email }}</p>

            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">Account Details</h2>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Registered:</strong> {{ Auth::user()->created_at->format('d M Y') }}</li>
                </ul>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <div class="bg-gray-100 p-6 rounded-md text-center shadow-sm">
                    <i class="fas fa-users text-3xl text-blue-600 mb-2"></i>
                    <div class="text-gray-600">Total Users</div>
                    <div class="text-2xl font-bold">{{ $totalUsers }}</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-md text-center shadow-sm">
                    <i class="fas fa-box text-3xl text-purple-500 mb-2"></i>
                    <div class="text-gray-600">Products</div>
                    <div class="text-2xl font-bold">35</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-md text-center shadow-sm">
                    <i class="fas fa-shopping-cart text-3xl text-indigo-600 mb-2"></i>
                    <div class="text-gray-600">Orders</div>
                    <div class="text-2xl font-bold">80</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-md text-center shadow-sm">
                    <i class="fas fa-credit-card text-3xl text-blue-500 mb-2"></i>
                    <div class="text-gray-600">Payments</div>
                    <div class="text-2xl font-bold">56</div>
                </div>
            </div>
        </div>
    </div>
@endsection
