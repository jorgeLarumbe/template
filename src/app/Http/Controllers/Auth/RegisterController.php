<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($_FILES['avatar']['size']);

        $name = $data['name'];
        
        if(!isset($data['avatar'])){

            $filename = 'default.png';

        }else{

            $image_type = $_FILES['avatar']['type'];
            if($image_type == 'image/png' OR $image_type == 'image/jpg' OR $image_type == 'image/jpeg'){

                $filename = $name . '.png';
                Image::make($data['avatar'])->resize(128, 128)->save(public_path('/images/uploads/avatars/' . $filename));
                
            }else {

                $filename = 'default.png';
                session()->flash('warning', 'El avatar no fue guardada, la extension del archivo no es permitido !!');
            }


        }
        
        return User::create([
            'avatar' => $filename,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
