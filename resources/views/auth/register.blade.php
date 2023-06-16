<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="personal_code" :value="__('ID code')" />
            <x-text-input id="personal_code" class="block mt-1 w-full" type="text" name="personal_code" :value="old('personal_code')" required autofocus autocomplete="personal_code" />
            <x-input-error :messages="$errors->get('personal_code')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="company" :value="__('Company')" />
            <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required autofocus autocomplete="company" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="payer_name" :value="__('Payers')" />
            <x-text-input id="payer_name" class="block mt-1 w-full" type="text" name="payer_name" :value="old('payer_name')" required autofocus autocomplete="payer_name" />
            <x-input-error :messages="$errors->get('payer_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="payer_address" :value="__('Payer address')" />
            <x-text-input id="payer_address" class="block mt-1 w-full" type="text" name="payer_address" :value="old('payer_address')" required autofocus autocomplete="payer_address" />
            <x-input-error :messages="$errors->get('payer_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="manager_first" :value="__('Manager First')" />
            <x-text-input id="manager_first" class="block mt-1 w-full" type="text" name="manager_first" :value="old('manager_first')" required autofocus autocomplete="manager_first" />
            <x-input-error :messages="$errors->get('manager_first')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="manager_last" :value="__('Manager Last')" />
            <x-text-input id="manager_last" class="block mt-1 w-full" type="text" name="manager_last" :value="old('manager_last')" required autofocus autocomplete="manager_last" />
            <x-input-error :messages="$errors->get('manager_last')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="manager_phone" :value="__('Manager Phone')" />
            <x-text-input id="manager_phone" class="block mt-1 w-full" type="text" name="manager_phone" :value="old('manager_phone')" required autofocus autocomplete="manager_phone" />
            <x-input-error :messages="$errors->get('manager_phone')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="manager_mail" :value="__('Manager Email')" />
            <x-text-input id="manager_mail" class="block mt-1 w-full" type="text" name="manager_mail" :value="old('manager_mail')" required autofocus autocomplete="manager_mail" />
            <x-input-error :messages="$errors->get('manager_mail')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
