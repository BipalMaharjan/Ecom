@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>categories Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($categories as $Category)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <?php $no++; ?>
                                    <td>{{ $Category->name }}</td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $Category->id) }}" method="POST">
                                            <a class="btn btn-success" href="{{ route('categories.edit', $Category->id) }}"><i class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
    $(document).ready( function () {
        $('#table_id').DataTable(
            {
    	"search":true
    }
        );
    } );
</script>
@endsection
