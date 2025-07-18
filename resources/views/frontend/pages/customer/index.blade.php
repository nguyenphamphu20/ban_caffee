@extends("frontend.layouts.master")
@section("title","Khách hàng")
@section("content")
<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include("frontend.layouts.user")
            </div>
            <div class="col-lg-8">
                @include("frontend.layouts.wallet")
            </div>
        </div>
    </div>
</section>
@endsection