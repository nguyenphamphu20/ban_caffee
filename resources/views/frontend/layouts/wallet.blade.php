<div class="wallet">
    <h2 class="heading-lv-2 wallet__heading">
        Ví của tôi
    </h2>
    <p class="wallet__desc">Phương thức thanh toán</p>
    <div class="row row-cols-3 mt-5">
        @php
        $banks = $user->banks;
        @endphp

        @if(!empty($banks))
        @foreach ($banks as $bank)
        <div class="col">
            <x-bank-component name="{{$bank->ten_chu_the}}" nameBank="{{$bank->ten_ngan_hang}}"
                numberBank="{{$bank->so_the}}" expired="{{$bank->thang.'/'.$bank->nam}}">
            </x-bank-component>
        </div>
        @endforeach
        @endif
        <div class="col">
            <a href="" class="wallet__add">
                <div class="wallet__add-btn">
                    <img src="{{asset('images/frontend/user/add.svg')}}" class="wallet__add-img" alt="add">
                    <div class="wallet__add-desc">Thêm thẻ mới</div>
                </div>
            </a>
        </div>

    </div>
    <h2 class="heading-lv-2 wallet__heading mt-5">
        Thông tin tài khoản
    </h2>
    <p class="wallet__desc">Địa chỉ, thông tin liên lạc</p>

    <div class="wallet__info mt-5">
        <div class="row row-cols-2 g-3">
            <div class="col">
                <div class="wallet__main">
                    <div class="wallet__info-icon">
                        <img src="{{asset('images/frontend/user/mail.svg')}}" alt="" class="icon">
                    </div>
                    <div class="wallet__content">
                        <div class="wallet__title">Địa chỉ email</div>
                        <div class="wall__subtitle">{{$user->email}}</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="wallet__main">
                    <div class="wallet__info-icon">
                        <img src="{{asset('images/frontend/user/phone.svg')}}" alt="" class="icon">
                    </div>
                    <div class="wallet__content">
                        <div class="wallet__title">Số điện thoại</div>
                        <div class="wall__subtitle">{{$user->sdt}}</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="wallet__main">
                    <div class="wallet__info-icon">
                        <img src="{{asset('images/frontend/user/address.svg')}}" alt="" class="icon">
                    </div>
                    <div class="wallet__content">
                        <div class="wallet__title">Địa chỉ</div>
                        <div class="wall__subtitle">{{$user->dia_chi}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>