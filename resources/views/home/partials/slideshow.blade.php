<div id="slideshow" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                {!! carouselIndicators($featured) !!}
            </ol>
            <div class="carousel-inner">


                <?php $first = true; ?>
               
               @foreach ($featured as $item) 

                

                <div data-url="#{{$item->slug}}" class="item <?php if ($first) {
    echo 'active';
} $first=false; ?>" style="background: url({{$item->present()->slideImageUrl()}}) no-repeat center center;">

                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="caption-title">{{$item->title}}</h2>
                            <h3 class="caption-subtitle">{{$item->subtitle}}</h3>
                        </div>
                    </div>
                </div>

                 @endforeach
                
            </div>
            <a class="left carousel-control" href="#slideshow" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#slideshow" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>