<?php

namespace App\Http\Controllers\Auth;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Naux\Mail\SendCloudTemplate;
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phoneNumber' => 'required|string|max:12',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
//        dd($data['lng']);
         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'station_id' => $data['station_id'],
            'confirmation_token' => str_random(40),
            'api_token' => str_random(20),
            'register_time' => Carbon::now(),
            'roles' => 'member',
            'Lng' => $data['lng'],
            'Lat' => $data['lat'],
            'remember_token' => str_random(10),
            'password' => bcrypt($data['password']),
        ]);
        $this->sendVerifyToUser($user);
        return $user;
    }

    private function sendVerifyToUser($user)
    {
        // 模板变量
        $data = [
            'url' => route('email.verify',['token' => $user->confirmation_token]),
            'name' => $user->name,
            ];
        $template = new SendCloudTemplate('Laravel_APP_Register', $data);

        Mail::raw($template, function ($message) use($user) {
            $message->from('admin@PVStation.com', '用户注册');

            $message->to($user->email);
        });
    }
}
