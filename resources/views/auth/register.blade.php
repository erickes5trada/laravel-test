<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="n_empleado" value="{{ __('Número de empleado') }}" />
                <x-jet-input id="n_empleado" class="block mt-1 w-full" type="text" name="n_empleado" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="Nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="Nombre" class="block mt-1 w-full" type="text" name="nombre" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="apellidoPat" value="{{ __('Apellido Paterno') }}" />
                <x-jet-input id="apellidoPat" class="block mt-1 w-full" type="text" name="apellidoPat" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="apellidoMat" value="{{ __('Apellido Materno') }}" />
                <x-jet-input id="apellidoMat" class="block mt-1 w-full" type="text" name="apellidoMat" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Rol del usuario:') }}" />
                <select name="role_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                    <option value="1">Auxiliar</option>
                    <option value="2">Encargado</option>
                    <option value="3">Coordinador</option>
                    <option value="4">Superusuario</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="status_id" value="{{ __('Status del usuario:') }}" />
                <select name="status_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>

            

            <div>
                <x-jet-label for="name" value="{{ __('Usario') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
