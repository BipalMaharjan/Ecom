@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>Brand Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            {{-- @can('brand-create') --}}
                                <a class="btn btn-success" href="{{ route('brands.create') }}"> Create New brand</a>
                            {{-- @endcan --}}
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
                            <th>Link</th>
                            <th>Image</th>
                            <th width="280px">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->link }}</td>
                                    {{-- <td> {{ $brand->image }}</td> --}}
                                    <td><img src="{{ '/storage/' . $brand->image }}" width="60" height="60"></td>
                                    <td>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('brands.show', $brand->id) }}"><i class="fas fa-eye"></i></a>
                                        {{-- @can('brand-edit') --}}
                                            <a class="btn btn-success" href="{{ route('brands.edit', $brand->id) }}"><i class="fas fa-edit"></i></a>
                                        {{-- @endcan --}}
                                        @csrf
                                        @method('DELETE')
                                        {{-- @can('brand-delete') --}}
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        {{-- @endcan --}}
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
