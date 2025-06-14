<x-auth-layout>
    <x-slot name="title">
        - ورود ادمین
    </x-slot>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('auth/upload/img-01.png') }}" alt="">
                </div>

                <form class="login100-form validate-form" action="{{ route('admin.login.store') }}" method="POST">
                    @csrf
                    <a href="" class="login100-form-title">سامانه مخابرات</a>
                    <span class="login100-form-title">ورود ادمین</span>
                    <div class="wrap-input100 text-right">
                        <label class="label" for="email">ایمیل</label>
                        <input class="input100 text-right" type="text" name="email"
                               placeholder="ایمیل خود را وارد نمایید" autocomplete="off">
                        <span class="focus-input100 text-right"></span>
                    </div>
                    @error('email')
                    <p id="error">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 text-right">
                        <label class="label" for="password">رمز</label>
                        <input class="input100 text-right" type="password" name="password"
                               placeholder="رمز خود را وارد نمایید" autocomplete="off">
                        <span class="focus-input100 text-right"></span>
                    </div>
                    @error('password')
                    <p id="error">{{ $message }}</p>
                    @enderror

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            ورود
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-auth-layout>
