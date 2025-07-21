<div class="wallet">
    <h2 class="heading-lv-2 wallet__heading">
        Ví của tôi
    </h2>
    <p class="wallet__desc">Phương thức thanh toán</p>
    <div class="row row-cols-3 mt-5 align-items-center g-3">
        @php
        $banks = $user->banks;
        @endphp

        @if(!empty($banks))
        @foreach ($banks as $bank)
        <div class="col">
            <div class="wallet__card">
                <x-bank-component name="{{$bank->ten_chu_the}}" nameBank="{{$bank->ten_ngan_hang}}"
                    numberBank="{{$bank->so_the}}" expired="{{$bank->thang.'/'.$bank->nam}}">
                </x-bank-component>
                <div class="wallet__control">
                    <a href="{{route('bank.edit',$bank->the_id)}}" class="wallet__link btn btn-warning">Sửa</a>
                    <form action="{{route('bank.destroy',$bank->the_id)}}" method="post" style="display: inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Bạn chắc chắn xoá chứ')"
                            class="wallet__link btn btn-danger">Xoá</button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach
        @endif
        <div class="col">
            <a href="{{route('bank.create')}}" class="wallet__add">
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
                        <div class="wallet__subtitle">{{$user->email}}</div>
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
                        <div class="wallet__subtitle">{{!empty($user->sdt) ? $user->sdt : '(Không có thông tin)'}}</div>
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
                        <div class="wallet__subtitle">{{!empty($user->dia_chi) ? $user->dia_chi : '(Không có thông
                            tin)'}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>