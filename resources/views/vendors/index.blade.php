@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>Vendsors Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            <a class="btn btn-success" href="{{ route('vendors.create') }}"> Create New Vendor</a>
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($vendors as $Vendor)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <?php $no++; ?>
                                    <td>{{ $Vendor->full_name }}</td>
                                    <td>{{ $Vendor->email }}</td>
                                    <td>
                                        <div>
                                            <form action="{{ route('vendors.destroy', $Vendor->id) }}" method="POST">
                                                <a class="btn btn-success" href="{{ route('vendors.edit', $Vendor->id) }}"><i class="fas fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>

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
    $(document).ready( function () {
        $('#table_id').DataTable(
            {
    	"search":true
    }
        );
    } );
</script>
@endsection
