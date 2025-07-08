<div id="myCarousel" class="carousel slide carousel-{{session('theme','light') === 'light' ? 'dark' : 'light' }}"
    data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner carousel__custom">
        <div class="carousel-item active">
            <img src="{{asset('/images/carousel/carousel-01.jpg')}}" class="carousel__img" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/images/carousel/carousel-02.jpg')}}" class="carousel__img" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/images/carousel/carousel-03.jpg')}}" class="carousel__img" alt="Slide 3">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/images/carousel/carousel-04.jpg')}}" class="carousel__img" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/images/carousel/carousel-05.jpg')}}" class="carousel__img" alt="Slide 5">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>