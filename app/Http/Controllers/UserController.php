<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
use Hash;
use File;
class UserController extends Controller
{
    //Admin Users
    public function addAdmin(){
        $permissions =  Permission::all();
        $data= compact('permissions');
        return view('admin.admin-add')->with($data);
    }
    public function AdminListing()
    {
        $user = User::all();
        $data = compact('user');
        return view('admin.admin-list')->with($data);
    }
    public function userdelete($id)
    {
        $products =  User::find($id)->delete();
        return redirect()->back();
    }
    public function storeAdmin(Request $request){
        $request->validate(
            [
                'file' => ['required','mimes:png,jpg,jpeg','max:2048'],
            ]
        );
       
        $file = $request->file('file');
        $file->move(public_path()."/ProfileImages/", $file->getClientOriginalName());
       $user = User::create
       ([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=> Hash::make($request->password),
        'filename'=> $file->getClientOriginalName(),
        'path'=> "/ProfileImages/".$file->getClientOriginalName(),
        ]);
        $str = $request['select01'];
        if($str == 'admin'){
            echo "hello admin";
            $permissions = Permission::all();
            echo $permissions;
        }
        else if($str == 'customer')
        {
            $permissions=null;
        }
        else{
            $permissions = Permission::whereIn('slug',$request->permission)->get();
            echo $permissions;
        }
        
        $user->userPermissions()->attach($permissions);
       return redirect()->back();
    }
    public function verfyUser()
    {
        return view('admin.verify-admin');
    }
    public function checkVerfiAdmin(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email',$email)->first();
        $check = false;
        $permissions = Permission::all();
        if($user != null){
            foreach($permissions as $data)
            {
                $slug = $data->slug;
                if ($user->hasPermission($slug))
                {
                    if (Hash::check($request['password'], $user->password)) {
                        $check = true;
                    } 
                }
                else{
                    $check = false;
                     
                }
            }
        }
        else
        { 
            return redirect()->back();
        }
        if($check==true)
        {
            echo "True";
        }
        else{
            return redirect()->back()->with('message', 'You Are Not Authorized Try Again.');
            echo "False";
        }
    }
}
