@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($announcements))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Announcement List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('announcements.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="100%">Content</th>


                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach($announcements as $announcement)
                        <tr>
                            <td class="table-text">
                                <div>{{$announcement->content}}</div>
                            </td>

                            <td>
                                <a href="{{ route('announcements.delete', $announcement->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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
