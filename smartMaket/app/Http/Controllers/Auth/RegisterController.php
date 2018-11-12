<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Common\Constant;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

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
    protected function postRegister(Request $data)
    {
        $validator = Validator::make($data->all(),
            [
                'name' => 'required|string|max:255',
                'phone' => 'required|numeric',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'phone.required' => 'Vui lòng nhập số điện thoại!',
                'email.email' => 'Không đúng định dạng email!',
                'email.unique' => 'Email này đã được sử dụng.',
                'password.required' => 'Vui lòng nhập mâtk khẩu!',
                'password.min' => 'Mật khẩu ít nhất có 8 kí tự.'
            ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }


        $user = new User();
        $user -> name = $data -> name;
        $user -> email = $data -> email;
        $user -> address = $data -> address;
        $user -> email = $data -> email;
        $user -> phone = $data -> phone;
        $user -> password = Hash::make($data -> password);
        $user -> save();
        return redirect('home') -> with('thanhcong','Tạo tài khoan thành công');


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function createUser(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role' => Constant::IS_USER
    //     ]);
    // }
}
