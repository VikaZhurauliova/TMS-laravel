@extends('app')
@section('content')

    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Admin panel</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.main') }}">Admin</a> </li>
                    <li class="active"><a href="{{ route('admin.feedback.index') }}">Feedback</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Content -->
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <!-- DataTable -->
            <div class="row mb-3">
                <div class="col-lg-6">
                    <a href="{{ route('admin.feedback.export.csv') }}" class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                    <a href="{{ route('admin.feedback.export.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Export to excel</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created at</th>
                            <th>File name</th>
                            <th>File size</th>
                            <th>File type</th>
                            <th>Active</th>
                        </thead>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                        <tr>
                            <td>{{$feedback->name}}</td>
                            <td>{{$feedback->email}}</td>
                            <td>{{$feedback->subject}}</td>
                            <td>{{$feedback->message}}</td>
                            <td>{{$feedback->created_at}}</td>
                            <td>{{$feedback->file_name}}</td>
                            <td>{{$feedback->file_size}}</td>
                            <td>{{$feedback->file_type}}</td>
                            @if($feedback->is_active)
                            <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td>
                                <a class="ml-2" href="{{ route('admin.feedback.delete', ['feedback' => $feedback->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i
                                        class="icon-trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
