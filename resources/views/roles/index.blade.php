@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>Role Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            @can('role-create')
                                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                            @endcan
                        </div>
                    </div>


                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('roles.show', $role->id) }}"><i class="fas fa-eye"></i></a>
                                        @can('role-edit')
                                            <a class="btn btn-success" href="{{ route('roles.edit', $role->id) }}"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('role-delete')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        @endcan
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <link rel="stylesheet" type="text/css"
                        href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>




                @endsection
                @section('tail')
                    <link rel="stylesheet" type="text/css"
                        href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#table_id').DataTable();
                        });
                    </script>


                @endsection
