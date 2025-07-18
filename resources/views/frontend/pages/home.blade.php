@extends("frontend.layouts.master")
@section("title","Home")
@section("content")
<main>
    <section class="carousel">
        <div class="container">
            @include("frontend.layouts.carousel")
        </div>
    </section>

    <section class="category">
        <div class="container">
            @include("frontend.layouts.category")
        </div>
    </section>
    <section class="home pb-5">
        <div class="container">
            <div class="row">
                <x-card-title value="<span class='title__active'>Home</span>"></x-card-title>
            </div>
            <div class="row row-cols-4 g-4">
                @foreach ($listOfProducts as $product )
                <div class="col">
                    <a
                        href="{{route('product',['nameCategory' => $product->category->ten_danh_muc,'nameProduct' => $product->ten_san_pham])}}">
                        <x-card-product image="{{$product->hinh}}" title="{{$product->ten_san_pham}}"
                            desc="{{$product->mo_ta}}" resource="{{$product->nguon_goc}}" price="{{$product->gia}}"
                            taste="{{$product->huong_vi}}">
                        </x-card-product>
                    </a>
                </div>
                @endforeach
            </div>
    </section>
</main>
@endsection