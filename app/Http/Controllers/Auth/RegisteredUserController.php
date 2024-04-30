<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],
            'pais' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'numeric','digits_between:10,15'],
            'codigoPostal' => ['required', 'string', 'max:10'],
            'nacimiento' => ['required', 'date','before:-18 years'],
            'genero' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' =>$request->lastname,
            'direccion' =>$request->direccion,
            'ciudad' =>$request->ciudad,
            'pais' =>$request->pais,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telefono' =>$request->telefono,
            'codigoPostal' =>$request->codigoPostal,
            'nacimiento' =>$request->nacimiento,
            'genero' =>$request->genero,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
