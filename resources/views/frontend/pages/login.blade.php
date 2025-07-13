<!DOCTYPE html>
<html lang="vi" class="{{session('theme','light')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    @vite(["resources/scss/frontend/frontend.scss","resources/js/app.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}" sizes="any" />
    <link rel="shortcut icon" href="{{asset('favicon/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}" />
</head>

<body>
    <section class="register">
        <div class="container-fluid">
            <div class="row row-cols-2 algin-items-center register__row">
                <div class="col">
                    <div class="register__gallery">
                        <div class="register__img">
                            <img src="{{asset('images/frontend/logo/logo.svg')}}" alt="Logo">
                        </div>
                        <div class="register__subtitle text-center">"Quán cà phê đặc sản - rang xay nguyên chất, phin
                            truyền thống
                            đậm vị, bánh
                            homemade thơm ngon"</div>
                    </div>
                </div>

                <div class="col">
                    <div class="register__content">
                        <div class="register__logo">
                            <a href="{{route('home')}}">
                                <div class="logo justify-content-center">
                                    @if (session("theme")==="dark")
                                    <img src="{{asset('images/frontend/logo/logo_dark.svg')}}" alt="Logo"
                                        class="logo__img">
                                    @else
                                    <img src="{{asset('images/frontend/logo/logo.svg')}}" alt="Logo" class="logo__img">
                                    @endif
                                    <div class="logo__title">Tisu Home</div>
                                </div>
                            </a>
                        </div>

                        <h2 class="register__heading text-center">Rất vui khi được gặp bạn lần nữa</h2>
                        <p class="register__desc">Chào mừng bạn quay lại đăng nhập. Là khách hàng quay lại, bạn có thể
                            truy cập vào tất cả thông tin đã lưu trước đó.</p>

                        <form action="get" class="register__form">
                            @csrf
                            <div class="register__group">
                                <input type="email" class="register__input position-relative" placeholder="Email">
                                <img src="{{asset('images/frontend/register/mail.svg')}}" alt=""
                                    class="register__input-img ">
                            </div>

                            <div class="register__group">
                                <input type="password" class="register__input position-relative" placeholder="Password">
                                <img src="{{asset('images/frontend/register/lock.svg')}}" alt=""
                                    class="register__input-img">
                            </div>
                            <a href="#"
                                class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} register__btn ">
                                Đăng ký</a>
                        </form>
                        <p class="text-center">Bạn chưa có tài khoản ? <a href="{{route('register')}}"
                                class="register__link">Đăng ký</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>