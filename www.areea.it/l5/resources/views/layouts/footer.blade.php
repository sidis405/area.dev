<footer id="contatti">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Contatti</h2>
                    </div>

                   {{--  <div class="col-sm-12">
                        <img src="/img/footer-logo.png" alt="">
                    </div> --}}
                    <div class="col-sm-4">                        
                        <p class="email"><a href="mailto:{!! strip_tags($texts['mail']['value']) !!}">{!! str_replace('p>', 'span>', $texts['mail']['value']) !!}</a></p>
                    </div>  
                    <div class="col-sm-4">
                        <p class="telephone">{!! str_replace('p>', 'span>', $texts['tel']['value']) !!}</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="address">{!! str_replace('p>', 'span>', $texts['address']['value']) !!}</p>
                    </div>
                    
                                  
                </div>
            </div>
        </div>

        <div class="copyright container">
            <div class="row">
                <div class="col-sm-6">
                    <p>Copyright@Area 2015 | <a href="policy">Privacy Policy</a></p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Web design by <a target="_blank" href="http://officine06.com">Officine06</a></p>
                </div>
            </div>
        </div>
    </footer>