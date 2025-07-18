@extends("frontend.layouts.master");
@section("title","Đăng ký")
@section("content")

<body>
    <section class="register">
        <div class="container-fluid">
            <div class="row row-cols-2 algin-items-center register__row g-0">
                <div class="col">
                    <div class="register__gallery">
                        <div class="register__img">
                            @if (session("theme")==="dark")
                            <img src="{{asset('images/frontend/logo/logo_dark.svg')}}" alt="Logo">
                            @else
                            <img src="{{asset('images/frontend/logo/logo.svg')}}" alt="Logo">
                            @endif
                        </div>
                        <div class="register__subtitle text-center">"Quán cà phê đặc sản - rang xay nguyên chất, phin
                            truyền thống
                            đậm vị, bánh
                            homemade thơm ngon"</div>
                    </div>
                </div>

                <div class="col">
                    <div class="register__content">
                        <h2 class="register__heading text-center">Đăng ký</h2>
                        <p class="register__desc text-center">Hãy tạo tài khoản và mua sắm để hưởng những ưu đãi cực sốc
                        </p>


                        <form action="{{route('register')}}" method="post" class="register__form">
                            @csrf
                            <div class="register__group">
                                <input type="text" class="register__input position-relative" placeholder="Tên"
                                    name="name">
                                <img src="{{asset('images/frontend/register/mail.svg')}}" alt=""
                                    class="register__input-img ">
                            </div>
                            <div class="register__group">
                                <input type="text" class="register__input position-relative" placeholder="Email"
                                    name="email">
                                <img src="{{asset('images/frontend/register/mail.svg')}}" alt=""
                                    class="register__input-img ">
                            </div>

                            <div class="register__group">
                                <input type="password" class="register__input position-relative" placeholder="Password"
                                    name="password">
                                <img src="{{asset('images/frontend/register/lock.svg')}}" alt=""
                                    class="register__input-img">
                            </div>

                            <div class="register__group">
                                <input type="password" class="register__input position-relative"
                                    placeholder="Confirm Password" name="password_confirmation">
                                <img src="{{asset('images/frontend/register/lock.svg')}}" alt=""
                                    class="register__input-img">
                            </div>
                            <button type="submit"
                                class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} register__btn ">
                                Đăng ký</button>

                            @if ($errors->any())
                            <ul class="ps-0">
                                @foreach ($errors-> all() as $error )
                                <li>
                                    <x-alert-component type="danger" content="{{$error}}"></x-alert-component>
                                </li>
                                @endforeach
                            </ul>
                            @elseif (session("notify"))
                            <x-alert-component type="success" content="{{session('notify')}}"></x-alert-component>
                            @endif
                        </form>

                        <p class="text-center">Bạn đã có một tài khoản ? <a href="{{route('login')}}"
                                class="register__link">Đăng
                                nhập</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection