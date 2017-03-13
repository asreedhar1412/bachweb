<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    var $role = '';



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $input = Input::only('email');

        $this->middleware('guest', ['except' => 'logout']);

        $role = DB::table('users')->where('email', $input['email'])->value('role');

        switch ($role)
        {
            case 0: $this->redirectTo = '/customer';
                break;
            case 1: $this->redirectTo = '/home';
                break;
            case 2: $this->redirectTo = '/groundstaff';
                break;
            default: $this->redirectTo = '';
                break;
        }


    }
}
