@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="edit-profile-container">
    <h2>Edit Profile</h2>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="edit-form">
        @csrf

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            @error('name')<small class="error">{{ $message }}</small>@enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email', $user->email) }}" required>
            @error('name')<small class="error">{{ $message }}</small>@enderror
        </div>

        <div class="form-group">
            <label>Profile Image</label>
            <div class="image-preview">
                <img src="{{ $user->image && file_exists(public_path('storage/profile_images/' . $user->image)) 
                    ? asset('storage/profile_images/' . $user->image) 
                    : asset('default/user.jpg') }}"
                     alt="User Image">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Upload New Image</label>
            <input type="file" name="image" accept="image/*">
            @error('image')<small class="error">{{ $message }}</small>@enderror
        </div>

        <button type="submit" class="btn-submit">Update Profile</button>
    </form>
</div>
@endsection
