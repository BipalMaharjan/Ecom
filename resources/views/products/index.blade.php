@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="pull-left">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center mt-3 mb-5">
                            <h2>product Management</h2>
                        </div>
                        <div class="pull-right mb-3">
                            @can('product-create')
                                <a class="btn btn-success" href="{{ route('products.create') }}"> Add New product</a>
                            @endcan
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            {{-- <th>Image</th> --}}
                            <th>Brand</th>
                            <th>Vendor</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Old Price</th>
                            <th>Discount</th>
                            <th>Stock</th>
                            <th>Desciption</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>

                            @foreach ($products as $vendor_product)
                            {{-- {{ dd($vendor_product); }} --}}
                                <tr>
                                    <td>{{ $vendor_product->id }}</td>
                                    <td>{{ $vendor_product->product->name }}</td>
                                    {{-- <td><img src="{{ '/storage/' . $vendor_product->image }}" width="60" height="60"></td> --}}
                                    <td>{{ $vendor_product->brand->name }}</td>
                                    <td>
                                        <label class="badge badge-info">{{ $vendor_product->vendor->full_name }}</label>
                                    </td>
                                    <td>
                                        @foreach ($vendor_product->categories as $category)
                                            <label class="badge badge-info">{{ $category->name }}</label>
                                        @endforeach
                                    </td>
                                    <td>Rs.{{ $vendor_product->price }}</td>
                                    <td>Rs.{{ $vendor_product->old_price }}</td>
                                    <td>Rs.{{ $vendor_product->discount }}</td>
                                    <td>Rs.{{ $vendor_product->stock }}</td>
                                    <td>{{ $vendor_product->description }}</td>

                                    <td style="width: 150px;">
                                        <form action="{{ route('products.destroy', $vendor_product->id) }}" method="POST">
                                            <a class="btn btn-primary"
                                                href="{{ route('products.show', $vendor_product->id) }}"><i
                                                    class="fas fa-eye"></i></a>
                                            @can('product-edit')
                                                <a class="btn btn-success"
                                                    href="{{ route('products.edit', $vendor_product->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('product-delete')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
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
