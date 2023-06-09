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
                    <li><a href="{{route('admin.main')}}">Admin</a> </li>
                    <li><a href="{{route('admin.users.index')}}">Users</a> </li>
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
                    <a href="{{ route('admin.users.export.csv') }}" class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                    <a href="{{ route('admin.users.export.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Export to excel</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Created at</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->created_at}}</td>
                            @if($user->ia_admin)
                            <td><span class="badge badge-pill badge-primary">Admin</span></td>
                            @else
                                <td><span class="badge badge-pill  badge-success">User</span></td>
                            @endif
                            <td>
                                <a class="ml-2" href="{{ route('admin.users.delete', ['user' => $user->id]) }}" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="icon-trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                    {!! $users->appends(Request::all())->links() !!}
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
