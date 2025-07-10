@extends("frontend.layouts.master")
@section("content")
<section class="product">
    <div class="container">
        <x-card-title value='<a href="{{route("home")}}">Home</a> > <a href="{{route("category",["nameCategory" => $nameCategory])}}">{{$nameCategory}}</a> > <span
                class="title__active">{{$product->ten_san_pham}}</span>'>
        </x-card-title>
        <div class="product__main">
            <div class="row">
                <div class="col-lg-5">
                    <img class="product__img" src="{{asset('images/frontend/product/'.$product->hinh)}}"></img>
                </div>

                <div class="col-lg-7">
                    <div class="product__content">
                        <div class="product__title">{{$product->ten_san_pham}}</div>
                        <div class="row row-cols-2 mt-5 align-items-center">
                            <div class="col">
                                <div class="product__desc">{{$product->mo_ta}}</div>
                            </div>
                            <div class="col">
                                <div class="product__roasting"><span class="product__bolder">Độ rang:</span>
                                    {{$product->do_rang}}</div>
                                <div class="product__taste"><span class="product__bolder">Hương vị:</span>
                                    {{$product->huong_vi}}</div>
                                <div class="product__resource"><span class="product__bolder">Xuất sứ:</span>
                                    {{$product->nguon_goc}}
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-2 mt-5">
                            <div class="col">
                                <div class="product__price"><span class="product__bolder">Giá:</span>
                                    {{number_format($product->gia)}} Đ</div>
                            </div>
                            <div class="col">
                                <div class="product__status"><span class="product__bolder">Trạng thái:</span> <span
                                        style="color:green"> {{$product->trang_thai}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <a href="#"
                                    class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} product__link ">Thêm
                                    vào</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection