@extends('layouts.app')

@section('content')
<div class="bg-orange-300 p-12 rounded-xl">
    <div class="sm:container sm:mx-auto sm:max-w-lg rounded-3xl">
        <div class="flex">
            <div class="w-11/12 rounded-xl">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm rounded-3xl">

                    <header class="flex items-center justify-center text-4xl font-bold text-gray-900 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md my-3">
                        {{ __('Login') }}
                    </header>
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center my-4">
                            Masukkan data dengan benar
                        </h1>
                        <img src="{{ url('assets/images/OlahraGO.png') }}" alt="Logo" class="h-4/12 w-4/12">
                    </div>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail') }}:
                            </label>

                            <input id="email" type="email"
                                class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                required>

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-2xl text-base leading-normal no-underline text-white bg-orange-400 sm:py-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __("Belum memiliki akun?") }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>
                            @endif
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </div>
</div>
@endsection
