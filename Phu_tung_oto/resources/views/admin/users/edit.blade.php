@extends('layouts.admin')

@section('title', 'Quản lý người dùng')

@section('content')
    <h2>Cập nhật người dùng</h2>
    <form action="{{ Route('admin.users.update', ['id' => $user->id]) }}" method="POST" class="w-50"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên người dùng</label>
            <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input name="email" value="{{ $user->email }}" type="text" class="form-control"
                id="exampleInputPassword1">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="text" class="form-control" id="exampleInputPassword1">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Avatar</label>
            <input name= "avatar" type="file" class="form-control" id="exampleInputPassword1">
            @error('avatar')
                <small class=text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Vai trò</label>
            <select name="role" id="">
                <option value="0">Admin</option>
                <option value="1">User</option>
            </select>
            @error('role')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Trạng thái</label>
            <select name="status" id="">
                <option value="0">Active</option>
                <option value="1">Unactive</option>
            </select>
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <input type="submit" />
    </form>
@endsection
