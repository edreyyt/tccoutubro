<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nome') }}" />
                <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="CPF" value="{{ __('CPF') }}" />
                <x-jet-input id="CPF" class="block w-full mt-1" type="text" name="CPF" required autofocus autocomplete="old('CPF')" />
            </div>

            <div class="mt-4">
                    <x-jet-label for="Numtel" value="{{ __('Número de telefone') }}" />
                    <x-jet-input id="Numtel" class="form-group row" type="text" name="Numtel" required autofocus autocomplete="old('Numtel')" />
                </div>


            <div class="mt-4">
                <x-jet-label for="Datanasc" value="{{ __('Data de Nascimento') }}" />
                <x-jet-input id="Datanasc" class="block w-full mt-1" type="date" name="Datanasc" required autofocus autocomplete="old('Datanasc')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="CEP" value="{{ __('CEP') }}" />
                <x-jet-input id="CEP" class="block w-full mt-1" type="text" name="CEP" required autofocus autocomplete="old('CEP')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="Numresi" value="{{ __('Número da casa') }}" />
                <x-jet-input id="Numresi" class="block w-full mt-1" type="text" name="Numresi" required autofocus autocomplete="old('Numresi')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>
         
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Repita a senha') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já está registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registre-se') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

