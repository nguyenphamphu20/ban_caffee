<div>
    <div class="home__card">
        <img src="{{asset('images/product/'.$image)}}" alt="" class="home__img">
        <div class="home__title">{{$title}}</div>
        <div class="home__desc">
            <div>{{$desc}}</div>
            <div>{{$taste}}</div>
        </div>
        <div class="home__resource">{{$resource}}</div>
        <div class="home__group">
            <div class="home__price">{{number_format($price)}} đ</div>
            <button class="btn btn-{{session('theme','light') === 'light' ? 'dark' : 'light' }} home__btn">Thêm
                vào</button>
        </div>
    </div>
</div>