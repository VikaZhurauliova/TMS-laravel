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
                    <li class="active"><a href="{{ route('admin.deliveries.index') }}">Delivery</a> </li>
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
                    <a href="{{ route('admin.deliveries.create')  }}" class="btn btn-light"><i class="icon-plus"></i>Add Delivery</a>
                    <a class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>image</th>
                            <th>active</th>
                        </thead>
                        <tbody>
                        @foreach($deliveries as $delivery)
                        <tr>
                            <td>{{$delivery->title}}</td>
                            <td>{{$delivery->description}}</td>
                            <td>{{$delivery->created_at}}</td>
                            <td>{{$delivery->image}}</td>
                            @if($delivery->is_active)
                            <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i
                                        class="icon-edit"></i></a>
                                <a class="ml-2" href="{{ route('admin.deliveries.delete', ['delivery' => $delivery->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i
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
