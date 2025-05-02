@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex-1 bg-gray-100 min-h-screen p-6 md:p-10">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-6">
        <div class="w-full lg:w-2/3 bg-white p-8 rounded-xl shadow-lg transition-all duration-300 hover:shadow-xl">
            <h1 class="text-3xl font-bold text-indigo-700 mb-4 flex items-center gap-3">
                <i class="fas fa-user-friends text-indigo-600"></i> Welcome, {{ Auth::user()->name }}
            </h1>
            <p class="text-gray-600 mb-6 text-lg">{{ Auth::user()->email }}</p>

            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Account Details</h2>
                <ul class="text-gray-700 space-y-3 text-sm">
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Registered:</strong> {{ Auth::user()->created_at->format('d M Y') }}</li>
                </ul>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-indigo-100 p-6 rounded-lg text-center shadow-md">
                    <i class="fas fa-users text-3xl text-indigo-600 mb-3"></i>
                    <div class="text-sm">Total Users</div>
                    <div class="text-2xl font-bold text-indigo-800">{{ $totalUsers }}</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg text-center shadow-md">
                    <i class="fas fa-box text-3xl text-gray-700 mb-3"></i>
                    <div class="text-sm">Products</div>
                    <div class="text-2xl font-bold text-gray-800">35</div>
                </div>
                <div class="bg-teal-100 p-6 rounded-lg text-center shadow-md">
                    <i class="fas fa-shopping-cart text-3xl text-teal-600 mb-3"></i>
                    <div class="text-sm">Orders</div>
                    <div class="text-2xl font-bold text-teal-800">80</div>
                </div>
                <div class="bg-amber-100 p-6 rounded-lg text-center shadow-md">
                    <i class="fas fa-wallet text-3xl text-amber-600 mb-3"></i>
                    <div class="text-sm">Payments</div>
                    <div class="text-2xl font-bold text-amber-800">56</div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 bg-white p-8 rounded-xl shadow-lg flex flex-col justify-between h-fit">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-6 border-b border-gray-200 pb-2">Recent Activities</h2>
                <div class="mb-4 p-4 bg-purple-100 border-l-4 border-purple-600 rounded-md text-purple-800 shadow-md flex items-start gap-3">
                    <i class="fas fa-star text-purple-600 text-xl mt-1"></i>
                    <div>
                        <p class="text-sm font-semibold">Premium Feature Activated!</p>
                        <p class="text-xs text-purple-700">Enjoy access to exclusive content and analytics.</p>
                    </div>
                </div>
                <div class="mb-4 p-4 bg-blue-50 rounded-md text-blue-700 text-sm shadow-sm">
                    <i class="fas fa-info-circle mr-2"></i> System maintenance scheduled at 11:00 PM.
                </div>
                @if($recentActivities->isEmpty())
                    <p class="text-gray-500 text-center py-4">No recent activities found.</p>
                @else
                    <ul class="space-y-4 max-h-[400px] overflow-y-auto pr-1">
                        @foreach($recentActivities as $activity)
                            <li class="flex items-center justify-between text-gray-700 bg-gray-100 px-4 py-3 rounded-lg shadow-sm">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-clock text-orange-500"></i>
                                    <span class="text-sm font-medium">{{ $activity->activity }}</span>
                                </div>
                                <span class="text-xs text-gray-500 activity-time" data-time="{{ $activity->updated_at->toIso8601String() }}">
                                    {{ $activity->updated_at->diffForHumans() }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
