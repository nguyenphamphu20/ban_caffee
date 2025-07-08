<div class="container">
    <div class="header__main">
        <a href="{{route('home')}}">
            <div class="logo">
                @if (session("theme")==="dark")
                <img src="{{asset('images/frontend/logo/logo_dark.svg')}}" alt="Logo" class="logo__img">
                @else
                <img src="{{asset('images/frontend/logo/logo.svg')}}" alt="Logo" class="logo__img">
                @endif
                <div class="logo__title">Tisu Home</div>
            </div>
        </a>

        {{-- begin navbar --}}
        <nav class="navbar navbar-expand-lg navbar__custom" data-bs-theme="{{session('theme','light')}}">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 gap-xl-3 gap-lg-1 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar__item" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-{{session('theme','light')}} mt-3 p-4 dropdown-menu__custom">
                            @foreach ($categories as $category )
                            <li>
                                <a class="dropdown-item py-2 dropdown-item__custom d-flex gap-4 align-items-center navbar__link"
                                    href="#">
                                    <img class="navbar__icon"
                                        src="{{asset('images/frontend/category/'.$category->hinh)}}"
                                        alt="{{$category->ten_danh_muc}}">
                                    {{$category->ten_danh_muc}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar__item" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Coffee
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-{{session('theme','light')}} mt-3 p-4 dropdown-menu__custom">
                            @foreach ($listOfCoffee as $coffee )
                            <li>
                                <a class="dropdown-item py-2 dropdown-item__custom d-flex gap-4 align-items-center navbar__link"
                                    href="#">
                                    {{$coffee->ten_san_pham}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar__item" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tea
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-{{session('theme','light')}} mt-3 p-4 dropdown-menu__custom">
                            @foreach ($listOfTea as $tea )
                            <li>
                                <a class="dropdown-item py-2 dropdown-item__custom d-flex gap-4 align-items-center navbar__link"
                                    href="#">
                                    {{$tea->ten_san_pham}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navbar__item" href="#">Giới thiệu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navbar__item" href="#">Nhân viên</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="header__group d-flex justify-contents-center align-items-center gap-4">
            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2 header__input" type="search" placeholder="Bạn tìm gì thế"
                    aria-label="Search" />
                <button class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} header__btn"
                    type="submit"><img src="{{asset('images/frontend/navbar/search.svg')}}" alt="Search"
                        class="icon-other"></button>
            </form>
            <a href="#" class="header__link">Login</a> |
            <a href="#" class="header__link">Register</a>
            <form action="{{route('home.theme')}}" method="post">
                @csrf
                <input type="hidden" name="theme" value="{{session('theme','light')}}">
                <button type="submit" class="btn">
                    @if (session("theme")==="dark")
                    <img class="header__img" src="{{asset('images/frontend/themes/icon_dark.svg')}}" alt="">
                    @else
                    <img class="header__img" src="{{asset('images/frontend/themes/icon.svg')}}" alt="">
                    @endif
                </button>

            </form>
        </div>
    </div>
</div>