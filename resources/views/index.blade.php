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
                @if($posts[0]->photos->toArray() == null)
                background: url('/../images/sport.jpg') center 100% no-repeat;
                @else 
                    @foreach($photos as $photo) @if($photo->forshow == 1 && $photo->post_id == $posts[0]->id )
                        background: url({{ 'uploads/'.$photo->img_dir }}) center 100% no-repeat;
                        @endif 
                    @endforeach 
                @endif
              
              background-size: cover;
              height: 450px;">
                <div style="padding: 20px;"><h1 style="color: #ddd; opacity: 0.9;">Upcoming Event</h1></div>
                <div class="wear-band">
                    <div class="wear-band-text">
                        <div class="mdl-typography--font-thin">{{$posts[0]->title}}</div>
                        <p class="mdl-typography--font-thin">
                            {{implode(' ', array_slice(str_word_count($posts[0]->content, 2), 0, 20))}}
                        </p>
                        <p>
                            <a class="mdl-typography--font-regular mdl-typography--text-uppercase alt-link" href="">
                  See Detail&nbsp;<i class="material-icons">chevron_right</i>
                </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="customized-section">
                <div class="customized-section-text">
                    <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Recently Published Announcements</div>
                    @foreach($announcements as $announcement)
                    <div>
                        <p class="mdl-typography--font-light">
                            {{ $announcement->content }}
                            </p>
                            <hr>
                     </div>
                    @endforeach
                </div>
            </div>
            <div class="more-section">
                <div class="section-title mdl-typography--display-1-color-contrast">Previous Events</div>
                <div class="card-container mdl-grid">
                    @foreach($posts as $post)
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--0dp" style="margin: 20px auto;  border: 1px solid #ddd;">
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
                            <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="/post/{{ $post->id }}">
                   Make the switch
                   <i class="material-icons">chevron_right</i>
                 </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          @endsection 
          @section('scrtag')
          <script type="text/javascript">
              window.sr = ScrollReveal();
              sr.reveal('.ann', {duration: 1000}, 50);
          </script>
          @endsection
          @section('style')
          <style type="text/css">
          .mdl-card:hover{
            box-shadow :5px 5px 5px #888888;
          }
          </style>
          @endsection