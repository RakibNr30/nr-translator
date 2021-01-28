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
                            <h3 class="card-title mt-1">Article Details</h3>
                            <a href="{{ route('admin.cms.article.index') }}" type="button" class="btn btn-success btn-sm text-white float-right">View Article List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title</label>
                                        <input id="title" name="title" value="{{ $article->title ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="details" class="@error('details') text-danger @enderror">Description</label>
                                        <div>
                                            {!! $article->details ?: 'N/A' !!}
                                        </div>
                                        @error('details')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image" class="@error('image') text-danger @enderror">Feature Image (Optional)</label>
                                        <input id="image" name="image" value="{{ $article->image->file_name ?? 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @if(isset($article->image))
                                            <div class="image-output">
                                                <img src="{{ $article->image->file_url }}">
                                            </div>
                                        @endif
                                        @error('image')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="external_link" class="@error('external_link') text-danger @enderror">External Link (Optional)</label>
                                        <input id="external_link" name="external_link" value="{{ $article->external_link ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('external_link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.cms.article.index') }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop