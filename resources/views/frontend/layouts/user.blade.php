<div class="user__info">
    <div class="user__gallery">
        <div class="user__card">
            <img src="{{ !empty($user->hinh) ? asset('images/frontend/user/'.$user->hinh) : asset('images/frontend/user/avatar.jpg')}}"
                alt="avatar for user" class="user__avatar">
            <h4 class="user__name">{{$user->ten_khach_hang}}</h4>
            <p class="user__register-day">Đăng ký: {{$user->created_at}}</p>
        </div>
        <img src="{{asset('images/frontend/user/background.jpg')}}" alt="Background" class="user__background">
    </div>

    <div class="user__content">
        <h3 class="user__heading">Quản lý tài khoản</h3>
        <ul class="user__list">
            <li class="user__item">
                <a href="{{route('customer.info')}}" class="user__link"><img class="icon"
                        src="{{asset('images/frontend/user/user.svg')}}" alt="">Chỉnh sửa thông tin cá nhân</a>
            </li>

            <li class="user__item">
                <div class="user__link"><img class="icon" src="{{asset('images/frontend/user/address.svg')}}"
                        alt="">{{!empty($user->dia_chi) ? $user->dia_chi : "(Chưa có thông tin)"}}</div>
            </li>

            <li class="user__item">
                <a href="" class="user__link"><img class="icon" src="{{asset('images/frontend/user/time.svg')}}"
                        alt="">Lịch sử đơn hàng</a>
            </li>
        </ul>
    </div>
</div>