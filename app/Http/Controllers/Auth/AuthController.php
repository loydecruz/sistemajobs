<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;



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

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

protected $redirectPath = '/user';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postRegister(Request $request){

        $rules = [
            'name' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:18|confirmed',
        ];

        $messages = [
            'name.required' => ' O campo é obrigatório',
            'name.min' => 'O número mínimo de caracteres permitido é de 3',
            'name.max' => 'O número máximo de caracteres permitidos são 16',
            'name.regex' => 'Somente letras são aceitas',
            'email.required' => 'O campo é obrigatório',
            'email.email' => 'O formato de e-mail está incorreto',
            'email.max' => 'O número máximo de caracteres permitidos são 255',
            'email.unique' => 'O e-mail já existe',
            'password.required' => 'O campo é obrigatório',
            'password.min' => 'O número máximo de caracteres permitidos são 6',
            'password.max' => 'O número máximo de caracteres permitidos são 18',
            'password.confirmed' => 'As senhas não são iguais',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return redirect("auth/register")
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->active = 1;
            $user->save();

            return redirect("auth/register")
            ->with("message", "Registro realizado com sucesso!");
        }


    }


    public function postLogin(Request $request){

        if (Auth::attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                    'active' => 1
                ]
                , $request->has('remember')
                )){
            return redirect()->intended($this->redirectPath());
        }
        else{
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];

            $messages = [
                'email.required' => 'O campo de e-mail é necessário',
                'email.email' => 'O formato de e-mail está incorreto',
                'password.required' => 'O campo de senha é necessário',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            return redirect('auth/login')
            ->withErrors($validator)
            ->withInput()
            ->with('message', 'Erro ao iniciar a sessão');
        }
    }



}
