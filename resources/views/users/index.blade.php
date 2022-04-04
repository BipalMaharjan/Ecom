@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>Users Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            @can('role-create')
                                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @can('product-list')
                                            <a class="btn btn-primary" href="{{ route('users.show', $user->id) }}"><i
                                                    class="fas fa-eye"></i></a>
                                        @endcan

                                        @can('product-edit')
                                            <a class="btn btn-success" href="{{ route('users.edit', $user->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('product-delete')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        @endcan
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('tail')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "search": true
            });
        });
    </script>
@endsection
