@extends("layouts.master");
@section("title","Home")
@section("content")
<main>
    <section class="carousel">
        <div class="container">
            @include("partials.carousel")
        </div>
    </section>

    <section class="category">
        <div class="container">
            @include("partials.category")
        </div>
    </section>
    <section class="home">
        <div class="container">
            <div class="row">
                <h1 class="heading-lv-2">Tất cả</h1>
            </div>
            <div class="row row-cols-4 mt-5 g-4">
                @foreach ($listOfProducts as $product )
                <div class="col">
                    <x-card-product image="{{$product->hinh}}" title="{{$product->ten_san_pham}}"
                        desc="{{$product->mo_ta}}" resource="{{$product->nguon_goc}}" price="{{$product->gia}}"
                        taste="{{$product->huong_vi}}">
                    </x-card-product>
                </div>
                @endforeach



            </div>
    </section>
</main>
@endsection