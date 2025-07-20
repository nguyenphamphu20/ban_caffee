@extends("frontend.layouts.master")
@section("title", isset($bankUpdate) ? "Sửa thẻ ngân hàng":"Thêm thẻ ngân hàng")
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
                        <h2 class="bank__heading">Thêm thẻ tín dụng hoặc thẻ ghi nợ</h2>
                    </div>

                    <form
                        action="{{ isset($bankUpdate) ? route('bank.update',$bankUpdate->the_id) : route('bank.store')}}"
                        method="post" class="bank__form">
                        @csrf
                        @if (isset($bankUpdate))
                        @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col">
                                <label class="bank__label" for="bank__name"> Họ và tên
                                    <input id="bank__name" type="text" name="name" class="bank__input"
                                        value="{{ isset($bankUpdate) ? $bankUpdate->ten_chu_the : ''}}">
                                </label>
                            </div>`
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="bank__label" for="bank__info">Thông tin ngân hàng
                                    <select class="bank__select" id="bank__info" name="bank_names">
                                        <option value="" disabled {{isset($bankUpdate) ? "" : "selected" }}>--Chọn ngân
                                            hàng--
                                        </option>
                                        <option value="VCB" {{( isset($bankUpdate) && $bankUpdate->ten_ngan_hang ===
                                            "VCB")?
                                            "selected":""}}>Vietcombank
                                            (VCB) – Ngân hàng TMCP Ngoại thương Việt Nam
                                        </option>
                                        <option value="BIDV" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "BIDV")?
                                            "selected":""}}>BIDV –
                                            Ngân hàng TMCP Đầu tư & Phát triển Việt Nam
                                        </option>
                                        <option value="CTG" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "CTG")?
                                            "selected":""}}>VietinBank (CTG) – Ngân hàng TMCP Công thương Việt Nam
                                        </option>
                                        <option value="TCB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "TCB")?
                                            "selected":""}}>Techcombank (TCB) – Ngân hàng TMCP Kỹ thương Việt Nam
                                        </option>
                                        <option value="MBB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "MBB")? "selected":""}}>MB
                                            Bank
                                            (MBB) – Ngân hàng TMCP Quân đội
                                        </option>
                                        <option value="ACB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "ACB")?
                                            "selected":""}}>ACB –
                                            Ngân hàng TMCP Á Châu
                                        </option>
                                        <option value="STB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "STB")?
                                            "selected":""}}>Sacombank (STB) – Ngân hàng TMCP Sài Gòn Thương Tín
                                        </option>
                                        <option value="VPB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "VPB")?
                                            "selected":""}}>VPBank
                                            (VPB) – Ngân hàng TMCP Việt Nam Thịnh Vượng
                                        </option>
                                        <option value="SHB" {{ isset($bankUpdate) && ($bankUpdate->ten_ngan_hang ===
                                            "SHB")?
                                            "selected":""}}>SHB –
                                            Ngân hàng TMCP Sài Gòn - Hà Nội
                                        </option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <label class="bank__label" for="bank__number">Số thẻ
                                    <input type="text" class="bank__input" id="bank__number" name="bank_number"
                                        value="{{isset($bankUpdate) ? $bankUpdate->so_the :''}}">
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="bank__label" for="bank__month">Tháng
                                    <input type="number" class="bank__input" id="bank__month" name="month"
                                        value="{{ isset($bankUpdate) ? $bankUpdate->thang:''}}">
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="bank__label" for="bank__year">Năm
                                    <input type="number" class="bank__input" id="bank__year" name="year"
                                        value="{{ isset($bankUpdate) ? $bankUpdate->nam :''}}">
                                </label>
                            </div>
                        </div>

                        <div class="bank__group">
                            <a href="{{route('bank.index')}}" class="bank__cancel">Thoát</a>
                            <button type="submit" class="bank__btn"> {{isset($bankUpdate) ? 'Sửa' : 'Lưu' }}</button>
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