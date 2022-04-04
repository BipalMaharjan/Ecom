@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('brands.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {{-- <td><img src="{{ '/storage/'.$brand->image}}" width="60" height="60"></td> --}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a src="/storage/{{ $brand->image }}"></a>
            </div>
        </div>

        <div class="col-sm-3 ">
            <div class="card">
                <img class="card-img-top" src="/storage/{{ $brand->image }}" height="200px" width="200px"
                    alt="Card image cap">
            </div>
        </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $brand->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Link:</strong>
                {{ $brand->link }}
            </div>
        </div>

@endsection

