<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    /*
     * mengganti sistem login di laravel autenticatin
     */
    protected $nik = 'nik';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'divisi' => $data['divisi'],
            'tipe' => $data['tipe'],
            'status' => $data['status'],
        ]);
    }

    /*
     * Costume Autenticatin tampilan untuk login
     */
    public function tampillogin()
    {
        $view = property_exists($this, 'loginView')
            ? $this->loginView : 'auth.authenticate';

        if (view()->exists($view)) {
            return view($view);
        }

        return view('admin.login');
    }

    /*
     * Costume Autentication untuk register user
     */
    public function tampilformregistrasi()
    {
        if (property_exists($this, 'registerView')) {
            return view($this->registerView);
        }

        return view('admin.register', ['url' => 'register']);
    }

    /*
     * Enter user ke database
     */
    public function daftar(Request $request)
    {
        Auth::guard($this->getGuard())->login($this->create($request->all()));
        return redirect($this->redirectPath());
    }
    /*
     * Redirect Setelah Login
     */
    public function authenticated($request, $user)
    {
        // Fungsi ini akan dipanggil setelah user berhasil login.
        // Kita bisa menambahkan aksi-aksi lainnya, misalnya mencatat waktu last_login user.
        return view('admin.index');
    }
}