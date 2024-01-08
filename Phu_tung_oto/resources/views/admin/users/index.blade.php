@extends('layouts.admin')

@section('title', 'Quản lý người dùng')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Gmail</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset($user->avatar) }}" style="width:50px" alt=""><span>
                            {{ $user->name }}</span></td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <a class="btn btn-primary mx-1" href="{{ route('admin.users.edit', ['id' => $user->id]) }}"><i
                                class="bi bi-pen"></i></a>
                        <form action="{{ Route('admin.users.destroy', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mx-1" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i
                                    class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
