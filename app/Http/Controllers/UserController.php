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
        return redirect('/view/login');
    }
    public function viewEditUser($id){
        if (Auth::user()->role == 2 || Auth::user()->id == $id) {
            $user = User::findOrFail($id);
            return view('admin/user/edit',compact('user'));
        }
        return redirect('/admin')->with('flash_message','No No No');
    }
    public function createUser(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'img' => 'image|nullable|max:1999'
        ]);
        if($request->hasFile('img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img')->move('assets/images/Avatar/', $fileNameToStore);
        } else {
            $fileNameToStore = '26_1_.jpg';
        }
            $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['img'] = $fileNameToStore;
        $user = User::create($data);
        return redirect()->back()->with('flash_message', 'User Created Success');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('flash_message','Đã xóa thành công');
    }
    public function updateUser(Request $request){
        $this->validate($request, [
          'img' => 'image|nullable|max:1999'
        ]);
        $user = User::findOrFail($request->id);
        if (Auth::user()->role != 2) {
            $request->role = $user->role;
        }
        if($request->hasFile('img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img')->move('assets/images/Avatar/', $fileNameToStore);
            
            $input = array('img' => $fileNameToStore,'name' => $request->name,'password' => $request->password,'gender' => $request->gender,'address' => $request->address,'phone' => $request->phone,'role' => $request->role);
            $user->update($input);
            return redirect('/admin/user/')->with('flash_message', 'User Edited');
        }
        $input = array('name' => $request->name,'password' => $request->password,'gender' => $request->gender,'address' => $request->address,'phone' => $request->phone,'role' => $request->role);
        $user->update($input);

        return redirect('/admin/user/')->with('flash_message', 'User Edited');
    }
}
