@extends("frontend.layouts.master");
@section("content")
<section class="category mt-5 pt-5">
    <div class="container">
        @include("frontend.layouts.category")
    </div>
</section>
<section class="categories">
    <div class="container">
        <div class="row">
            <h2 class="heading-lv-2">Home > {{$nameCategory}}</h2>
        </div>
        <div class="row row-cols-4 g-4">
            @foreach ($listOfProducts as $product )
            <div class="col">
                <a href="#">
                    <x-card-product image="{{$product->hinh}}" title="{{$product->ten_san_pham}}"
                        desc="{{$product->mo_ta}}" resource="{{$product->nguon_goc}}" price="{{$product->gia}}"
                        taste="{{$product->huong_vi}}">
                    </x-card-product>
                </a>
            </div>
            @endforeach
        </div>
</section>
@endsection