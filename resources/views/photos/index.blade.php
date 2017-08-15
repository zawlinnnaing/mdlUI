@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($photos))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Photos List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('photos.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="40%">img_dir</th>
                        <th width="40%">name</th>
                        <th width="20%">id</th>

                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td class="table-text">
                                <div>{{$photo->img_dir}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$photo->name}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$photo->id}}</div>
                            </td>
                            <td>
                                <a href="{{ route('photos.details', $photo->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('photos.edit', $photo->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('photos.delete', $photo->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection
