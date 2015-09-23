<section id="attivita">
    <div class="row">
        <div class="col-xs-12">
            <h2>Attività</h2>
        </div>
        
        <div id="load-more-activities-url" style="display:none">{{formatLoadMoreUrl($activities->nextPageUrl())}}</div>
        <div class="activities-container">
            @include('home.partials.activities-partial')
        </div>
        </div>
        @if($activities->hasMorePages())
        <span class="load-more-activities load-more-section">Visualizza di più</span>
        @endif
</section> <!-- end of attivita section -->