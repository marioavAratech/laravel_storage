@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin: auto">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="lastname" :value="__('Apellido')" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="direccion" :value="__('Direccion')" />
                    <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autocomplete="direccion" />
                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="ciudad" :value="__('Ciudad')" />
                    <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')" required autocomplete="ciudad" />
                    <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="pais" :value="__('Pais')" />
                    <x-text-input id="pais" class="block mt-1 w-full" type="text" name="pais" :value="old('pais')" required autocomplete="pais" />
                    <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="avatar"/>

                    <x-text-input id="avatar" class="block mt-1 w-full"
                                    type="file" accept="image/*"
                                    name="avatar"/>

                    <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="telefono" :value="__('Telefono')" />
                    <x-text-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="codigoPostal" :value="__('Codigo Postal')" />
                    <x-text-input id="codigoPostal" class="block mt-1 w-full" type="text" name="codigoPostal" :value="old('codigoPostal')" required autocomplete="codigoPostal" />
                    <x-input-error :messages="$errors->get('codigoPostal')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="nacimiento" :value="__('Fecha de Nacimiento')" />
                    <x-text-input id="nacimiento" class="block mt-1 w-full" type="date" name="nacimiento" :value="old('nacimiento')" required autocomplete="nacimiento" />
                    <x-input-error :messages="$errors->get('nacimiento')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <fieldset>
                        <legend>Genero</legend>
                        <div>
                            <x-input-label for="genero" :value="__('Masculino')" />
                            <x-text-input id="masculino" class="block mt-1 w-full" type="radio" name="genero" :value="old('genero')" required autocomplete="genero" value="masculino"/>
                        </div>
                        <div>
                            <x-input-label for="genero" :value="__('Femenino')" />
                            <x-text-input id="femenino" class="block mt-1 w-full" type="radio" name="genero" :value="old('genero')" required autocomplete="genero" value="femenino"/>
                        </div>
                    </fieldset>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
    
