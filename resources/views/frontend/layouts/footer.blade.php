<div class="container">
    <div class="row row-cols-4 g-5">
        <div class="col">
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
            <div class="footer__info mt-5">"Quán cà phê đặc sản - rang xay nguyên chất, phin truyền thống đậm vị, bánh
                homemade thơm ngon"</div>
            <p class="footer__subtitle mt-5">Nhập địa chỉ email của bạn để nhận được nhiều ưu đãi</p>
            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2 footer__input" type="search" placeholder="Địa chỉ email của bạn"
                    aria-label="Search" />
                <button class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} footer__btn"
                    type="submit">Gửi</button>
            </form>
        </div>

        <div class="col">
            <h4 class="footer__title">Điều khoản</h4>
            <ul class="mt-4">
                <li class="footer__item"><a class="footer__link" href="{{route('termsOfUse')}}">Điều khoản sử dụng</a>
                </li>
                <li class="footer__item"><a class="footer__link" href="{{route('security')}}">Chính sách bảo mật thông
                        tin</a></li>
            </ul>
        </div>

        <div class="col">
            <h4 class="footer__title">Menu</h4>
            <ul class="mt-4">
                @foreach ($categories as $category )
                <li class="footer__item"><a class="footer__link"
                        href="{{route('category',['nameCategory' => $category->ten_danh_muc])}}">{{$category->ten_danh_muc}}</a>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="col">
            <h4 class="footer__title footer__title--image icon"><img class="footer__img"
                    src="{{asset('images/frontend/footer/phone.svg')}}" alt="">
                Đặt
                hàng</h4>
            <p class="footer__title mt-3">0961962423</p>
            <h4 class="footer__title footer__title--image icon mt-5"><img class="footer__img"
                    src="{{asset('images/frontend/footer/address.svg')}}" alt="">
                Địa chỉ</h4>
            <iframe class="footer__map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.905187588812!2d106.61752876951576!3d10.763683716846062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752d70e17dda43%3A0x7a376a617f89773c!2zMzgxIFTDom4gSMOyYSDEkMO0bmcsIELDrG5oIFRy4buLIMSQw7RuZywgQsOsbmggVMOibiwgSOG7kyBDaMOtIE1pbmggNzAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1751981975253!5m2!1svi!2s"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="footer__hr my-5">
        </div>
        <h3 class="text-center">Tissue &copy; 2025</h3>
    </div>