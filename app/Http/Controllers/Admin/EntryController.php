<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * Class EntryController
 * @package App\Http\Controllers\Admin
 */
class EntryController extends Controller
{

    /**
     * TODO 绑定中间件
     * EntryController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin.auth')->except(['loginForm', 'login']);
    }

    /**
     * TODO 登录视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm()
    {
        return view('admin.entry.login');
    }

    /**
     * TODO 登录操作
     */
    public function login(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        if ($status) {
            //TODO 登录成功
            return redirect('/admin/index');
        }

        return redirect('admin/login')->with('error', '用户名或密码错误');
    }

    /**
     * TODO 登出操作
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    /**
     * TODO 后台主页视图
     * @return string
     */
    public function index()
    {
        return view('admin.entry.index');
    }
}
