<div>
    <div class="product-card">
        <img src="{{asset('images/frontend/product/'.$image)}}" alt="" class="product-card__img">
        <div class="product-card__title">{{$title}}</div>
        <div class="product-card__desc">
            <div>{{$desc}}</div>
            <div>{{$taste}}</div>
        </div>
        <div class="product-card__resource">{{$resource}}</div>
        <div class="product-card__group">
            <div class="product-card__price">{{number_format($price)}} đ</div>
            <button class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} product-card__btn">Thêm
                vào</button>
        </div>
    </div>
</div>