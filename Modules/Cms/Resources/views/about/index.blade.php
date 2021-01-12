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
                            <h3 class="card-title mt-1">Update About Us Info</h3>
                        </div>
                        {!! Form::open(['url' => url('admin/about', [$about->id]), 'method' => 'put']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">About Us Title</label>
                                        <input id="title" name="title" value="{{ old('title') ?: $about->title }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter about us title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subtitle" class="@error('subtitle') text-danger @enderror">About Us Subtitle (Optional)</label>
                                        <input id="subtitle" name="subtitle" value="{{ old('subtitle') ?: $about->subtitle }}" type="text" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Enter about us subtitle" autofocus>
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="details" class="@error('details') text-danger @enderror">About Us Details</label>
                                        <textarea id="details" name="details" class="form-control" rows="3"
                                                  placeholder="Enter about us details">{{ old('details') ?: $about->details }}</textarea>
                                        @error('details')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="link" class="@error('link') text-danger @enderror">About Us link (Optional)</label>
                                        <input id="link" name="link" value="{{ old('link') ?: $about->link }}" type="text" class="form-control @error('link') is-invalid @enderror" placeholder="Enter about us link" autofocus>
                                        @error('link')
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
