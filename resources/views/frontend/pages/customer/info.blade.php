@extends("frontend.layouts.master")
@section("title", "Thông tin khách hàng")
@section("content")
<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include("frontend.layouts.user")
            </div>
            <div class="col-lg-8">
                <div class="bank">
                    <div class="bank__header">
                        <a href="{{route('bank.index')}}">
                            <img class="bank__img icon" src="{{asset('images/frontend/user/arrow-left.svg')}}">
                            </img>
                        </a>
                        <h2 class="bank__heading">Thông tin khách hàng</h2>
                    </div>

                    <form action="{{route('customer.update',$user->khach_hang_id)}}" method="post" class="bank__form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label class="bank__label" for="name"> Họ và tên
                                    <input id="name" type="text" name="name" class="bank__input"
                                        value="{{$user->ten_khach_hang}}">
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="bank__label" for="email">Email
                                    <input type="email" class="bank__input" id="email" name="email"
                                        value="{{$user->email}}">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="bank__label" for="address">Địa chỉ
                                    <input type="text" class="bank__input" id="address" name="address"
                                        value="{{!empty($user->dia_chi) ? $user->dia_chi : ''}}">
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="bank__label" for="phone">Số điện thoại
                                    <input type="text" class="bank__input" id="phone" name="phone"
                                        value="{{!empty($user->sdt) ? $user->sdt : ''}}">
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="bank__label" for="level">Level
                                    <input type="text" class="bank__input bank__input--none" id="level" name="month"
                                        value="{{$user->level}}" readonly>
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="bank__label" for="points">Điểm
                                    <input type="text" class="bank__input bank__input--none" id="points" name="month"
                                        value="{{$user->diem}}" readonly>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="bank__label" for="customer__photo">Hình đại diện
                                    <img src="{{ !empty($user->hinh) ? asset('images/frontend/user/'.$user->hinh) : asset('images/frontend/user/avatar.jpg')}}"
                                        alt="" class="customer__photo" id="customer__preview">
                                    <input type="file" class="bank__input" id="customer__photo" name="photo" hidden>
                                </label>
                            </div>
                        </div>

                        <div class="bank__group">
                            <a href="{{route('bank.index')}}" class="bank__cancel">Thoát</a>
                            <button type="submit" class="bank__btn">Lưu</button>
                        </div>
                        @if ($errors->any())
                        @php
                        $notifies = $errors->all();
                        @endphp
                        <x-alert-component type="danger" :notifies="$notifies">
                        </x-alert-component>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section("script")
<script>
    document.getElementById('customer__photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('customer__preview');
    
    if (file) {
        // Tạo URL tạm thời cho file ảnh vừa chọn
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            
            // Thêm hiệu ứng (tuỳ chọn)
            preview.style.opacity = '0';
            setTimeout(() => {
                preview.style.opacity = '1';
                preview.style.transition = 'opacity 0.3s ease';
            }, 100);
        }
        
        reader.readAsDataURL(file);
    }
});
</script>
@endsection