<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile() {

    	return view('admin.partials.avatar-profile', array('user' => Auth::user()) );

    }

	public function update_avatar(Request $request) {


        $image_type = $_FILES['avatar']['type'];

        if($image_type == 'image/png' OR $image_type == 'image/jpg' OR $image_type == 'image/jpeg'){

            // Handle the user upload of avatar
        	if($request->hasFile('avatar')){

        		$avatar = $request->file('avatar');
        		$filename = auth()->user()->name . '.png';
        		Image::make($avatar)->resize(300, 300)->save( public_path('/images/uploads/avatars/' . $filename ) );

        		$user = Auth::user();
        		$user->avatar = $filename;

                $user->save();
            }
            
            session()->flash('success', 'Avatar profile Updated !!');
        	return view('admin.partials.avatar-profile', array('user' => Auth::user()) );
        
        }else {

            session()->flash('error', 'El archivo que intenta guardar no es valido !!');
            return view('admin.partials.avatar-profile', array('user' => Auth::user()) );
            
        }


    }
}