
@extends('layouts.master')

@section('content')
<html>
    <head>
    </head>
    <body>
    <a style="margin-left:60px;" href="{{ url()->previous() }}" class="btn btn-warning">Back</a>

        <div class="content-wrapper">
            <section class="content">
                <div class="row mb-2">
                    <div class="col-sm-6">
                     <div class="container-fluid">

                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name')}}">
                                        @error('name')
                                            <p class="text-danger">{{ $errors->first('name')}}</p>
                                        @enderror
                                    </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 pt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                     </div>
                    </div>
                </div>
            </section>
          </div>

    </div>
    </body>
</html>
@endsection

