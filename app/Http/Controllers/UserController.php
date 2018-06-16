<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\CreateSignInRequest;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function managerUser(){
    	$users = DB::table('users')->paginate(10);
    	return view('admin/user/index',compact('users'));
    }
    public function viewLogin(){
        $currentUser = Auth::user();
            if($currentUser){
            return redirect('/admin')->with('flash_message', 'Vui lòng đăng xuất');
        }
        return view('admin/user/login');
    }
    public function login(CreateSignInRequest $request)
    {
        $currentUser = Auth::user();
            if($currentUser){
            return redirect('/admin')->with('flash_message', 'Vui lòng đăng xuất');
        }
        $Email = $request->Email;
        $Password = $request->Password;
        if(Auth::attempt(['email' => $Email, 'password' => $Password])) {
            return redirect('/admin')->with('flash_message','Đăng nhập thành công');
        }
        return redirect()->back()->with('flash_message','Tài khoản đăng nhập của bạn không đúng');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function viewEditUser($id){
        $users = User::findOrFail($id);
        return view('admin/user/edit');
    }
    public function createUser(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return redirect()->back()->with('flash_message','Tạo tài khoản thành công');;
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('flash_message','Đã xóa thành công');
    }
}
