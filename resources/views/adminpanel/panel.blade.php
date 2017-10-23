@extends('adminpanel.layout') 
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn" id="posts">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="card" id="{{ $post->id }}">
                    <div class="card-header">
                        {{ $post->title }}
                        <span class="float-right"><i class="fa fa-pencil-square-o" aria-hidden="true" post_id="{{$post->id}}" style="text-align: center; vertical-align: middle;"></i>
                                        <i class="fa fa-trash-o" aria-hidden="true" post_id="{{$post->id}}"style="text-align: center;"></i>
                                        </span>
                    </div>
                    <div class="card-body">
                        {{implode(' ', array_slice(str_word_count($post->content, 2), 0, 40))}}.....
                    </div>
                </div>
            </div>
            @endforeach     
        </div>

    </div>
    <div class="animated fadeIn" id="announcements" style="display: none;">
        <div class="row">
            @foreach($announcements as $announcement)
            <div class="col-sm-6 col-md-4">
                <div class="card" id="{{ $announcement->id }}">
                    <div class="card-header">
                        <span class="float-right"><i class="fa fa-pencil-square-o" aria-hidden="true" post_id="{{$announcement->id}}" style="text-align: center; vertical-align: middle;"></i>
                                        <i class="fa fa-trash-o" aria-hidden="true" post_id="{{$announcement->id}}"style="text-align: center;"></i>
                                        </span>
                    </div>
                    <div class="card-body">
                        {{implode(' ', array_slice(str_word_count($announcement->content, 2), 0, 40))}}.....
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

               


    <div class="card col-md-9" id="posts_form" style="display: none;">
        <div class="card-body">
            <form action="" method="post" id="post_form_data" name="post_form_data" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Title</label>
                    <div class="col-md-9">
                        <input type="text" id="title" name="title" class="form-control" placeholder="Text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="textarea-input">Textarea</label>
                    <div class="col-md-9">
                        <textarea id="content" name="content" rows="9" class="form-control" placeholder="Content.."></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Publisher</label>
                    <div class="col-md-9">
                        <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Text">
                    </div>
                </div>
                <div id="fine-uploader-manual-trigger"></div>
                
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" id="post_submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>

        <div class="card col-md-9" id="announcements_form" style="display: none;">
            <div class="card-body">
                <form action="" method="post" id="post_form_data" name="post_form_data" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="textarea-input">Textarea</label>
                        <div class="col-md-9">
                            <textarea id="content" name="content" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" id="announcement_submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>
        </div>

</div>
<style type="text/css">
span>i {
    width: 20px;
    cursor: pointer;
}
  #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
        }

        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }

        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }

        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }
</style>
@endsection 
@section('script')  
<script type="text/javascript">
$('.fa-trash-o').click(function(e) {
    e.preventDefault();
    var id = $(this).attr('post_id');
    $.get('/posts/delete/' + id, function() {
        $('#' + id).remove();
    });
});
</script>
@endsection