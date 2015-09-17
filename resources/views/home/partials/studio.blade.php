<section id="studio">
        <div class="row">
            <div class="col-xs-12">
                <h2>Studio</h2>
            </div>
            @foreach ($staff as $member) 
                <div class="col-xs-12 team-member">
                    <h3 class="team-member-name">{{ $member->name }}</h3>
                    <a href="mailto:{{ $member->email }}" class="team-member-mail">{{ $member->email }}</a>
                    <div class="team-member-box">
                        <p class="team-member-short">
                            {!! nl2br($member->intro) !!}
                        </p>
                        <a class="read-more">Leggi di più</a>

                        <p class="team-member-long">

                                {!! str_replace(['<p>', '</p>'], '', $member->description) !!}

                        </p>
                    </div>
                </div> <!-- end of team member -->
            @endforeach
        </div>
    </section> <!-- end of studio section -->