<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'name' => "required|min:2|max:100|string",
        //         'email' => "required|mail|min:2|max:50|string",
        //         'password' => "required|min:3|max:50|string",
        //         'avatar' => "required|image|mines:jpg,jpeg,png,gif|max:20480",
        //         'role'  => "required",
        //         'status' => "required",
        //     ],
        //     [
        //         'required' => 'vui lòng không bỏ trống',
        //         'email.required' => 'vui lòng ko để trống Email',
        //         'avatar.required' => 'vui lòng upload file',
        //         'min' => ':attribute không ít hơn :min ký tự',
        //         'max' => ':attribute không vượt quá :max ký tự',

        //     ],
        //     [
        //         'name' => 'Tên người dùng',
        //         'email' => 'Email',
        //         'password' => 'Mật khẩu',
        //         'role' => 'Vai trò',
        //         'status' => 'Trạng thái',
        //     ]
        // );
        $input = $request->all();
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $filename = $file->getClientOriginalName();
            $path = $file->move('uploads/avatar', $filename);
            $thumbnail = 'uploads/avatar/' . $filename;
            $input['avatar'] = $thumbnail;
        } else {
            return redirect()->route('admin.users.create')->with('error', 'Có lỗi xảy ra');
        }
        User::create($input);
        return redirect()->route('admin.users.list')->with('success', 'Thêm người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        //validate
        $file_path = $user['avatar'];
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $input = $request->except('_token', '_method');
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $filename = $file->getClientOriginalName();
            $path = $file->move('uploads/avatar', $filename);
            $thumbnail = 'uploads/avatar/' . $filename;
            $input['avatar'] = $thumbnail;
        } else {
            return redirect()->route('admin.users.create')->with('error', 'Có lỗi xảy ra');
        }
        $update = User::where('id', $id)->update($input);
        if ($update) {
            return redirect()->route('admin.users.list')->with('success', 'Cập nhật người dùng thành công');
        } else {
            return redirect()->route('admin.users.list')->with('error', 'Cập nhật người dùng không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user->delete($id)) {
            return redirect()->route('admin.users.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.users.list',)->with('error', 'Lỗi');
        }
    }
}
