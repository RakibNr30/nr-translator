@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.partials._alert')
                    <div class="card card-gray-dark card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Update Home Banner Info</h3>
                        </div>
                        {!! Form::open(['url' => url('admin/home-banner', [$banner->id]), 'method' => 'put']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Banner Title</label>
                                        <input id="title" name="title" value="{{ old('title') ?: $banner->title }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tag_line" class="@error('tag_line') text-danger @enderror">Banner Tag Line (Optional)</label>
                                        <input id="tag_line" name="tag_line" value="{{ old('tag_line') ?: $banner->tag_line }}" type="text" class="form-control @error('tag_line') is-invalid @enderror" placeholder="Enter tag line" autofocus>
                                        @error('tag_line')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link_1" class="@error('link_1') text-danger @enderror">First link (Optional)</label>
                                        <input id="link_1" name="link_1" value="{{ old('link_1') ?: $banner->link_1 }}" type="text" class="form-control @error('link_1') is-invalid @enderror" placeholder="Enter first link" autofocus>
                                        @error('link_1')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link_name_1" class="@error('link_name_1') text-danger @enderror">First link Name (Optional)</label>
                                        <input id="link_name_1" name="link_name_1" value="{{ old('link_name_1') ?: $banner->link_name_1 }}" type="text" class="form-control @error('link_name_1') is-invalid @enderror" placeholder="Enter first link name" autofocus>
                                        @error('link_name_1')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link_2" class="@error('link_2') text-danger @enderror">Second link (Optional)</label>
                                        <input id="link_2" name="link_2" value="{{ old('link_2') ?: $banner->link_2 }}" type="text" class="form-control @error('link_2') is-invalid @enderror" placeholder="Enter second link" autofocus>
                                        @error('link_2')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link_name_2" class="@error('link_name_2') text-danger @enderror">Second link Name (Optional)</label>
                                        <input id="link_name_2" name="link_name_2" value="{{ old('link_name_2') ?: $banner->link_name_2 }}" type="text" class="form-control @error('link_name_2') is-invalid @enderror" placeholder="Enter second link name" autofocus>
                                        @error('link_name_2')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
