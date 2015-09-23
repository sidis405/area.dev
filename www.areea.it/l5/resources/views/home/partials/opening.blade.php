<section id="opening">
        <div class="row slogan">
            <div class="col-xs-12">
                <h3>
                    {!! $texts['slogan']['value'] !!}
                </h3>
            </div>
        </div> <!-- end of slogan -->

        @include('home.partials.slideshow')

        <div class="row about">
            <div class="col-xs-12">
                <p>                    
                    {!! $texts['block_1']['value'] !!}
                </p>
            </div>
        </div>        

        <div class="row about">
            <div class="col-xs-12">
                <p>                    
                    {!! $texts['block_2']['value'] !!}
                </p>
            </div>
        </div>
    </section> <!-- end of opening -->