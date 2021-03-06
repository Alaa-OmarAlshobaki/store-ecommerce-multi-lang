<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ResetPassRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function ViewProfile(){
       $admin= Admin::find(Auth::guard('admin')->user()->id);
       return view('admin.profile.profile',compact('admin'));
    }

    public function EditProfile(){
        $admin=Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.profile.edit-profile',compact('admin'));
    
    }
    public function UpdateProfile(UpdateProfileRequest $request){
        try{
       
            $admin=Admin::find(Auth::guard('admin')->user()->id);
            $admin->update($request->only(['name','email']));
         

            return redirect()->back()->with('success',__('admin/error.msg_success_back'));
        }
        catch(\Exception $ex){
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));

        }
        
    }

    public function ResetPass(){
        $admin= Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.profile.reset-pass',compact('admin'));
    }


    public function UpdatePass(ResetPassRequest $request){
        $admin= Admin::find(Auth::guard('admin')->user()->id);
      
       
         if ( ! Hash::check($request->oldPass,$admin->password)) {
            return response()->json(['success'=>false, 'message' => 'Reset password Fail, pls check password']);
         }
           try{
            if($request->filled('password')){
                $request->merge(['password'=>bcrypt($request->password)]);
            }
             unset($request['id']);// delete request id 
             $admin->update($request->all());
             return redirect()->back()->with('success',__('admin/error.msg_success_back'));

           }
           catch(\Exception $ex){
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));

           }
        

    }
  
}
