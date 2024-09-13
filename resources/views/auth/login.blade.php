<x-guest-layout>
    <style>
        .form-container {
            background-color: #f7fafc;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 420px;
            margin: 3rem auto;
        }
        .form-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .input-group {
            margin-bottom: 1.25rem;
        }
        .input-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }
        .input-field {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: #63b3ed;
            box-shadow: 0 0 0 4px rgba(99, 179, 237, 0.3);
        }
        .error-message {
            color: #e53e3e;
            font-size: 0.75rem;
            margin-top: 0.5rem;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }
        .checkbox-label {
            font-size: 0.875rem;
            color: #4a5568;
            margin-left: 0.5rem;
        }
        .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }
        .forgot-password-link, .register-link {
            font-size: 0.875rem;
            color: #4a5568;
            text-decoration: none;
            transition: color 0.2s ease;
            margin-top: 1rem;
        }
        .forgot-password-link:hover, .register-link:hover {
            color: #2b6cb0;
            text-decoration: underline;
        }
        .submit-button {
            background-color: #3182ce;
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            text-align: center;
            margin-top: 1.5rem;
        }
        .submit-button:hover {
            background-color: #2c5282;
        }
    </style>

    <div class="form-container">
        <h2 class="form-title">{{ __('Log in') }}</h2>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-group">
                <x-input-label for="email" :value="__('Email')" class="input-label" />
                <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="input-group">
                <x-input-label for="password" :value="__('Password')" class="input-label" />
                <x-text-input id="password" class="input-field"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Remember Me -->
            <div class="checkbox-group">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <label for="remember_me" class="checkbox-label">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="button-group">
                @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="register-link" href="{{ route('register') }}">
                        {{ __('Don\'t have an account? Register') }}
                    </a>
                @endif

                <x-primary-button class="submit-button">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
