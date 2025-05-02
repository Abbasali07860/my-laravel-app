@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">User List</h2>

    <form method="POST" action="{{ route('admin.users.bulk-update-status') }}">
        @csrf

        <div class="mb-4 flex justify-between items-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Change Status
            </button>
        </div>

        <table class="min-w-full bg-white border rounded shadow">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left"><input type="checkbox" id="select-all"></th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Mobile</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-t">
                    <td class="px-4 py-2">
                        <input type="checkbox" name="user_ids[]" value="{{ $user->id }}" class="user-checkbox">
                    </td>
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">{{ $user->mobile }}</td>
                    <td class="px-4 py-2">
                        @if($user->status === 'active')
                            <span class="text-green-600 font-bold">Active</span>
                        @else
                            <span class="text-red-500 font-bold">Inactive</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="inline-block" onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

<script>
document.getElementById('select-all').addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('.user-checkbox');
    checkboxes.forEach(cb => cb.checked = this.checked);
});
</script>
@endsection
