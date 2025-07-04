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
            <div class="row row-cols-4 mt-5">
                <div class="col">
                    <div class="home__card">
                        <img src="{{asset('images/product/ca-phe-den.png')}}" alt="" class="home__img">
                        <div class="home__title">Cà Phê Đen</div>
                        <div class="home__resource">Việt Nam</div>
                        <div class="home__group">
                            <div class="home__price">25.000đ</div>
                            <button
                                class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} home__btn">Mua
                                hàng</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection