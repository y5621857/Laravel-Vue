<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use Auth;

class MyController extends CommonController
{
    public function passwordForm()
    {
        return view('admin.my.passwordForm');
    }

    public function changePassword(AdminPost $request)
    {
        $model = Auth::guard('admin')->user();

        $model->password = bcrypt($request['password']);
        $model->save();

        flash('修改密码成功')->overlay();
        return redirect()->back();
    }
}
