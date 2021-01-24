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
                            <h3 class="card-title mt-1">Update Site Info</h3>
                        </div>
                        {!! Form::open(['url' => url('admin/site', [$site->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Site Title</label>
                                        <input id="name" name="name" value="{{ old('name') ?: $site->name }}" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter site title" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="logo" class="@error('logo') text-danger @enderror">Site Logo</label>
                                        <input id="logo" name="logo" value="{{ old('logo') }}" type="file" class="form-control @error('logo') is-invalid @enderror" placeholder="Select File" autofocus>
                                        {{--@if(isset($site->logo->file_name))
                                            <span class="invalid-feedback text-dark" role="alert"><strong>logo: {{ $site->logo->file_name }}</strong></span>
                                        @endif--}}
                                        @if(isset($site->logo))
                                            <div class="image-output">
                                                <img src="{{ $site->logo->file_url }}">
                                            </div>
                                        @endif
                                        @error('logo')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="favicon" class="@error('favicon') text-danger @enderror">Site Favicon</label>
                                        <input id="favicon" name="favicon" value="{{ old('favicon') }}" type="file" class="form-control @error('favicon') is-invalid @enderror" placeholder="Select File" autofocus>
                                        {{--@if(isset($site->favicon->file_name))
                                            <span class="invalid-feedback text-dark" role="alert"><strong>favicon: {{ $site->favicon->file_name }}</strong></span>
                                        @endif--}}
                                        @if(isset($site->favicon))
                                            <div class="image-output">
                                                <img src="{{ $site->favicon->file_url }}">
                                            </div>
                                        @endif
                                        @error('favicon')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="details" class="@error('details') text-danger @enderror">Site Details (Optional)</label>
                                        <textarea id="details" name="details" class="form-control" rows="3"
                                                  placeholder="Enter site details">{{ old('details') ?: $site->details }}</textarea>
                                        @error('details')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
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
