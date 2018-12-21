<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Plan;
use App\Notifications\ConfirmationEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/register/success';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'last_name' => 'required|string|max:255',
            'checkbox' =>'required',


            'business_kind' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_activity' => 'required|string|max:255',
            'business_plan' => 'required|string|max:255',

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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'last_name' => $data['last_name'],
            'checkbox' => $data['checkbox'],
            'business_kind' => $data['business_kind'],
            'business_name' => $data['business_name'],
            'business_activity' => $data['business_name'],
            'business_plan' => $data['business_plan'],

        ]);



       // $user->notify(new ConfirmationEmail()); //uncomment this to get email sending working

        return $user;
    }
}
