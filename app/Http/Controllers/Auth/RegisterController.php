<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/email/verify';

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
            'cnpj_cpf' => ['required', 'string', 'max:14', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            // 'nik_name' => ['string', 'max:255'],
            // 'contact' => ['string', 'max:255'],
            // 'rg_ie' => ['integer', 'max:20'],
            // 'im' => ['integer', 'max:20'],
            // 'phone' => ['integer', 'max:11'],
            // 'celphone' => ['integer', 'max:11'],
            // 'address' => ['string', 'max:255'],
            // 'neighborhood' => ['string', 'max:155'],
            // 'city' => ['string', 'max:255'],
            // 'state' => ['string', 'max:2'],
            // 'number' => ['string', 'max:20'],
            // 'zipcode' => ['integer', 'min:8', 'max:9'],
            // 'complement' => ['string', 'max:55'],
            'email' => ['required', 'string', 'email', 'confirmed', 'max:255', 'unique:users'],
            // 'site' => ['string', 'url', 'max:255'],
            'signup-terms' => 'accepted',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            
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
        // return dd($data);
        return User::create([
            'cnpj_cpf' => $data['cnpj_cpf'],
            'name' => $data['name'],
            // 'nik_name' => $data['nik_name'],
            // 'contact' => $data['contact'],
            // 'rg_ie' => $data['rg_ie'],
            // 'im' => $data['im'],
            // 'phone' => $data['phone'],
            // 'celphone' => $data['celphone'],
            // 'address' => $data['address'],
            // 'neighborhood' => $data['neighborhood'],
            // 'city' => $data['city'],
            // 'state' => $data['state'],
            // 'number' => $data['number'],
            // 'zipcode' => $data['zipcode'],
            // 'complement' => $data['complement'],
            'email' => $data['email'],
            // 'site' => $data['site'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
