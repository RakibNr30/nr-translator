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
                            <h3 class="card-title mt-1">Update Contact Info</h3>
                        </div>
                        {!! Form::open(['url' => url('admin/contact', [$contact->id]), 'method' => 'put']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message_to_user" class="@error('message_to_user') text-danger @enderror">Message To Users</label>
                                        <textarea id="message_to_user" name="message_to_user" class="form-control" rows="3"
                                                  placeholder="Enter message to users">{{ old('message_to_user') ?: $contact->message_to_user }}</textarea>
                                        @error('message_to_user')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_1" class="@error('phone_1') text-danger @enderror">Primary Phone No (Optional)</label>
                                        <input id="phone_1" name="phone_1" value="{{ old('phone_1') ?: $contact->phone_1 }}" type="text" class="form-control @error('phone_1') is-invalid @enderror" placeholder="Enter primary phone no" autofocus>
                                        @error('phone_1')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_2" class="@error('phone_2') text-danger @enderror">Secondary Phone No (Optional)</label>
                                        <input id="phone_2" name="phone_2" value="{{ old('phone_2') ?: $contact->phone_2 }}" type="text" class="form-control @error('phone_2') is-invalid @enderror" placeholder="Enter secondary phone no" autofocus>
                                        @error('phone_2')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_1" class="@error('email_1') text-danger @enderror">Primary Email (Optional)</label>
                                        <input id="email_1" name="email_1" value="{{ old('email_1') ?: $contact->email_1 }}" type="text" class="form-control @error('email_1') is-invalid @enderror" placeholder="Enter primary email" autofocus>
                                        @error('email_1')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_2" class="@error('email_2') text-danger @enderror">Secondary Email (Optional)</label>
                                        <input id="email_2" name="email_2" value="{{ old('email_2') ?: $contact->email_2 }}" type="text" class="form-control @error('email_2') is-invalid @enderror" placeholder="Enter secondary email" autofocus>
                                        @error('email_2')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address" class="@error('address') text-danger @enderror">Address (Optional)</label>
                                        <input id="address" name="address" value="{{ old('address') ?: $contact->address }}" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" autofocus>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="longitude" class="@error('longitude') text-danger @enderror">Longitude [To embed google map] (Optional)</label>
                                        <input id="longitude" name="longitude" value="{{ old('longitude') ?: $contact->longitude }}" type="text" class="form-control @error('longitude') is-invalid @enderror" placeholder="Enter longitude" autofocus>
                                        @error('longitude')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="latitude" class="@error('latitude') text-danger @enderror">Latitude [To embed google map] (Optional)</label>
                                        <input id="latitude" name="latitude" value="{{ old('latitude') ?: $contact->latitude }}" type="text" class="form-control @error('latitude') is-invalid @enderror" placeholder="Enter latitude" autofocus>
                                        @error('latitude')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website_link" class="@error('website_link') text-danger @enderror">Website Link (Optional)</label>
                                        <input id="website_link" name="website_link" value="{{ old('website_link') ?: $contact->website_link }}" type="text" class="form-control @error('website_link') is-invalid @enderror" placeholder="Enter website link" autofocus>
                                        @error('website_link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook_link" class="@error('facebook_link') text-danger @enderror">Facebook Link (Optional)</label>
                                        <input id="facebook_link" name="facebook_link" value="{{ old('facebook_link') ?: $contact->facebook_link }}" type="text" class="form-control @error('facebook_link') is-invalid @enderror" placeholder="Enter facebook link" autofocus>
                                        @error('facebook_link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter_link" class="@error('twitter_link') text-danger @enderror">Twitter Link (Optional)</label>
                                        <input id="twitter_link" name="twitter_link" value="{{ old('twitter_link') ?: $contact->twitter_link }}" type="text" class="form-control @error('twitter_link') is-invalid @enderror" placeholder="Enter twitter link" autofocus>
                                        @error('twitter_link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram_link" class="@error('instagram_link') text-danger @enderror">Instagram Link (Optional)</label>
                                        <input id="instagram_link" name="instagram_link" value="{{ old('instagram_link') ?: $contact->instagram_link }}" type="text" class="form-control @error('instagram_link') is-invalid @enderror" placeholder="Enter instagram link" autofocus>
                                        @error('instagram_link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube_link" class="@error('youtube_link') text-danger @enderror">Youtube Link (Optional)</label>
                                        <input id="youtube_link" name="youtube_link" value="{{ old('youtube_link') ?: $contact->youtube_link }}" type="text" class="form-control @error('youtube_link') is-invalid @enderror" placeholder="Enter youtube link" autofocus>
                                        @error('youtube_link')
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
