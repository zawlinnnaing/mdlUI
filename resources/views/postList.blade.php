@extends('layout')
@section('content') 
<div class="column container is-9" style="border: none; padding: 0">
<div class="card-container mdl-grid" style="margin: 0 auto;">
    @foreach($posts as $post)
    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--0dp" style="border: 1px solid #ddd;">
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

{{ $posts->links()}}

@endsection
<style type="text/css">    
ul.pagination{
        list-style: none !important;
        justify-content: center;
    }
    ul>li{
        margin: 0 10px !important;
        cursor:pointer;
        width: 135px;
        padding: 10px;
        border: 1px solid #ddd;
    }
</style>
