<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Models\User;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255','min:4'],
            'lastname' => ['required', 'string', 'max:255','min:4'],
            'direccion' => ['required', 'string', 'max:255','min:4'],
            'ciudad' => ['required', 'string', 'max:255','min:4'],
            'pais' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'lowercase', 'email','min:6', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'numeric','digits_between:10,15'],
            'codigoPostal' => ['required', 'string', 'max:10'],
            'nacimiento' => ['required', 'date','before:-18 years'],
            'genero' => ['required', 'string'],
        ];
    }

    public function messages(){
        return [
            'name.required'=> "El campo nombre no se ha completado",
            'name.min'=> "El campo nombre debe tener al menos 3 caracteres",
            'password.confirmed'=>"Las dos contraseñas no coinciden"
        ];
    }
}
