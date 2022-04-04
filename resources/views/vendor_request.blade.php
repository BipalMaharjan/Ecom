@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>Vendor Request</h2>
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
                            <th>Request from</th>
                            <th width="280px">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($vendor_request as $key => $data)
                            @csrf
                                <tr>
                                    <td>{{ $data->id}}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>
                                        <form action="{{  route('grant-vendor',$data->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $data->user_id }}" >
                                            <input type="hidden" name="vendor_request_id" value="{{ $data->id }}" >
                                            @if ($data->status == 0)
                                            <button class="btn btn-primary" type="submit">Accept</button>
                                            <a class="btn btn-danger" href="{{ route('grant-vendor', $data->id) }}">reject</a>
                                            @else
                                                No Action
                                            @endif
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
