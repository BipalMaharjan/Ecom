@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('vendor_products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a src="/storage/{{ $vendor_product->image }}"></a>
            </div>
        </div> --}}

        <div class="col-sm-3 ">
            <div class="card">
                <img class="card-img-top" src="/storage/{{ $vendor_product->image }}" height="200px" width="200px"
                    alt="Card image cap">
            </div>
        </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $vendor_product->vendor_product_title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>vendor:</strong>
                {{ $vendor_product->vendor->full_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $vendor_product->price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category:</strong>
                @foreach ($vendor_product->categorys as $category)
                 {{$category->name}}
                @endforeach
                {{-- {{ $vendor_product->categorys->name }} --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Description:</strong>
            {{ $vendor_product->description }}
            </div>
        </div>
    </div>
@endsection

