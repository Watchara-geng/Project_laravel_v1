<x-guest-layout>
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/cs.jpg" alt="IMG">
                    </div>

<form method="POST" action="{{ route('login') }}">
            @csrf
            
                <span class="login100-form-title">
                    ระบบบริหารจัดการงานวิจัย
                </span>
                <span class="login100-form-title2">
                    Research Management System
                </span>
            <!-- Email Address -->
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="email">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>


            <!-- Password 
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>-->
            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
               

                <x-button class="login100-form-btn">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
</x-guest-layout>
