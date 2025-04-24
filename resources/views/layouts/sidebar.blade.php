<!-- Sidebar -->
<aside class="w-64 bg-white border-r border-gray-200 shadow-sm min-h-screen">
    <div class="p-6">
    <a href="{{route('dashboard')}}">
        <h2 class="text-2xl font-bold text-purple-700 mb-8">User Panel</h2>
    </a>    
        <nav class="space-y-3">
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md transition">
                <i class="fas fa-home mr-3 text-lg"></i> Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md transition">
                <i class="fas fa-user mr-3 text-lg"></i> Profile
            </a>
            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md transition">
                <i class="fas fa-cogs mr-3 text-lg"></i> Settings
            </a>
            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md transition">
                <i class="fas fa-sign-out-alt mr-3 text-lg"></i> Logout
            </a>
        </nav>
    </div>
</aside>

