@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Anouncement <a href="{{ route('announcements.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('announcements.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                  <!--  <div class="form-group">
                        <label class="control-label col-sm-2" >Img Directory</label>
                        <div class="col-sm-10">
                            <input type="text" name="img_dir" id="img_dir" class="form-control">
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>
                    </div>
                  <!--  <div class="form-group">
                        <label class="control-label col-sm-2" >Associated Post ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="post_id" id="post_id" class="form-control">
                        </div> -->
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
