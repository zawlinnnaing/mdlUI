@extends('layout')
@section('content')
            <a name="top"></a>
            <div class="be-together-section mdl-typography--text-center">
                <div class="logo-font create-character">
                    Some make wonder happens.
                    <br> Some watch wonder happens.
                    <br>
                </div>
            </div>
            <div class="wear-section" style="position: relative;
              background: url('/../images/sport.jpg') center 100% no-repeat;
              background-size: cover;
              height: 450px;">
                <div class="wear-band">
                    <div class="wear-band-text">
                        <div class="mdl-typography--font-thin">The best of Google built in</div>
                        <p class="mdl-typography--font-thin">
                            Android works perfectly with your favourite apps like Google Maps, Calendar and YouTube.
                        </p>
                        <p>
                            <a class="mdl-typography--font-regular mdl-typography--text-uppercase alt-link" href="">
                  See what's new in the Play Store&nbsp;<i class="material-icons">chevron_right</i>
                </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="customized-section">
                <div class="customized-section-text">
                    <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Recently Published Announcements</div>
                    @foreach($announcements as $announcement)
                        <p class="mdl-typography--font-light">
                            {{ $announcement->content }}
                            <hr>
                    @endforeach
                </div>
                <div class="customized-section-image"></div>
            </div>
            <div class="more-section">
                <div class="section-title mdl-typography--display-1-color-contrast">More from Android</div>
                <div class="card-container mdl-grid">
                    @foreach($posts as $post)
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                        <div class="mdl-card__media">
                            @if($post->photos->toArray() == null)
                            <img src="images/serveimage.gif"> @else @foreach($photos as $photo) @if($photo->forshow == 1 && $photo->post_id == $post->id )
                            <img src="{{ asset('uploads/'.($photo->img_dir)) }}"> @endif @endforeach @endif
                        </div>
                        <div class="mdl-card__title">
                            <h4 class="mdl-card__title-text">{{ $post->title }}</h4>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <span class="mdl-typography--font-light mdl-typography--subhead">{{implode(' ', array_slice(str_word_count($post->content, 2), 0, 20))}}</span>
                        </div>
                        <div class="mdl-card__actions">
                            <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Make the switch
                   <i class="material-icons">chevron_right</i>
                 </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endsection