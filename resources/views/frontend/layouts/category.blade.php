<div class="row">
    <div class="col">
        <h1 class="heading-lv-2">Danh mục yêu thích</h1>
    </div>
</div>
<div class="row">
    <div id="carouselCategories"
        class="carousel slide category__carousel carousel-{{session('theme','light') === 'light' ? 'dark' : 'light' }}">
        <div class="carousel-indicators">
            @foreach ($categories->chunk(3) as $key => $chuck )
            <button type="button" data-bs-target="#carouselCategories" data-bs-slide-to="{{$key}}"
                class="{{$loop->first?'active':''}}" aria-current="true" aria-label="Slide {{$key}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ( $categories->chunk(3) as $chunk )
            <div class="carousel-item {{$loop->first?'active':''}}">
                <div class="row row-cols-3">
                    @foreach ($chunk as $category )
                    <div class="col">
                        <a href="{{route('category',$category->danh_muc_id)}}" class="category__link">
                            <x-card-category image="{{$category->hinh}}" price="{{$category->gia}}"
                                desc="{{$category->mo_ta}}">
                            </x-card-category>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategories" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCategories" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>