@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="profile-page">

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
            @error('email')<small class="error">{{ $message }}</small>@enderror
        </div>

        <div class="form-group">
            <label>Profile Image</label>
            <div class="image-preview">
                <img src="{{ $user->image ? asset('storage/profile_images/' . $user->image) : asset('default/user.png') }}"
                     alt="User Image">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Upload New Image <small style="color: red;">(JPG, PNG, GIF – Max 2MB)</small></label>
            <input type="file" name="image" accept="image/jpeg,image/png,image/gif">
            @error('image')<small class="error">{{ $message }}</small>@enderror
        </div>

        <button type="submit" class="btn-submit">Update Profile</button>
    </form>
    </div>
</div>

<style>

    .profile-page {
        background-color: #f4f6fa;
        padding: 60px 0;
    }
    
    .edit-profile-container {
        max-width: 600px;
        margin: 40px auto;
        background: #fff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .edit-profile-container h2 {
        font-size: 24px;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .edit-form .form-group {
        margin-bottom: 1.5rem;
    }

    .edit-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .edit-form input[type="text"],
    .edit-form input[type="file"] {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    .image-preview img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #e0e0e0;
    }

    .btn-submit {
        display: inline-block;
        background-color: #4f46e5;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit:hover {
        background-color: #4338ca;
    }

    .alert-success {
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 1rem;
        font-size: 14px;
    }

    .error {
        color: red;
        font-size: 13px;
    }
</style>
@endsection
