@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$vendor_product->id) }}" enctype="multipart/form-data" method="POST">
    	@csrf
        @method('put')
        <div class="row">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @enderror
            </div>

            {{-- <div class="form-group">
                <input type="file" name="file" required>
            </div> --}}

            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price"
                    value="{{ old('price') }}">
                @error('price')
                    <p class="text-danger">{{ $errors->first('price') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <strong>Discount:</strong>
                <input type="number" name="discount" class="form-control" placeholder="discount"
                    value="{{ old('discount') }}">
                @error('discount')
                    <p class="text-danger">{{ $errors->first('discount') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="number" name="stock" class="form-control" placeholder="stock"
                    value="{{ old('stock') }}">
                @error('stock')
                    <p class="text-danger">{{ $errors->first('stock') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <strong>category:</strong>
                <div>
                    <select class="js-example-basic-single" name="category[]">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}
                            </option>
                </div>
                @endforeach
                </select>
            <div class="form-group">
                <strong>Brand:</strong>
                <div>
                    <select class="js-example-basic-single" name="brand_id">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}
                            </option>
                </div>
                @endforeach
                </select>
               @hasanyrole('Admin|super-admin')
                <div class="form-group">
                    <strong>vendor:</strong>
                    <div>
                        <select class="js-example-basic-single" name="vendor_id">
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->id }}">{{ $vendor->full_name }}
                                </option>
                    </div>
                    @endforeach
                    </select>
                </div>
                @else
                <input type="hidden" name='vendor_id' value="{{ $user->vendor->id }}">
                @endhasanyrole
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" class="form-control" placeholder="description"
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="file" required>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 pt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>


@endsection
