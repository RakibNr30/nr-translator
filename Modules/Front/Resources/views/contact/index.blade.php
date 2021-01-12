@extends('front.layouts.master')

@section('title', 'Contact Us')
@section('active_status_contact', 'active')

@section('breadcrumb')
    <section class="breadcrumbs-custom breadcrumbs-custom-svg">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle">Get in Touch with Us</p>
            <p class="heading-1 breadcrumbs-custom-title">Contact Us</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('front.home.index') }}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section section-lg bg-default">
        <div class="section-wave">
            <svg x="0px" y="0px" width="1920px" height="46px" viewbox="0 0 1920 46" preserveAspectRatio="none">
                <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
            </svg>
        </div>
        <div class="container container-bigger">
            <div class="row row-ten row-50 justify-content-md-center justify-content-xl-between">
                <div class="col-md-9 col-lg-6">
                    <h3>Contact us</h3>
                    <hr class="divider divider-left divider-default">
                    @if(isset($contact->message_to_user))
                        <p class="big">
                            {{ $contact->message_to_user }}
                        </p>
                    @endif
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="" action="">
                        <div class="row row-20">
                            <div class="col-md-12">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-name">Name</label>
                                    <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-email">E-mail</label>
                                    <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-phone">Phone</label>
                                    <input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-message">Message</label>
                                    <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 offset-custom-4">
                                <div class="form-button">
                                    <button class="button button-secondary button-nina" type="submit" disabled>send message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-4 col-xl-3">
                    <div class="column-aside">
                        <div class="row">
                            @if(isset($contact->address))
                                <div class="col-sm-10 col-md-6 col-lg-12">
                                    <h6>Address</h6>
                                    <hr class="divider-thin">
                                    <article class="box-inline">
                                   <span>
                                       {{ $contact->address }}
                                   </span>
                                    </article>
                                </div>
                            @endif
                            @if(isset($contact->phone_1) || isset($contact->phone_2))
                                <div class="col-sm-10 col-md-6 col-lg-12">
                                    <h6>Phone</h6>
                                    <hr class="divider-thin">
                                    <article class="box-inline">
                                        <ul class="list-comma">
                                            @if(isset($contact->phone_1))
                                                <li><a href="tel:{{ $contact->phone_1 }}">{{ $contact->phone_1 }}</a></li>
                                            @endif
                                            @if(isset($contact->phone_2))
                                                <li><a href="tel:{{ $contact->phone_2 }}">{{ $contact->phone_2 }}</a></li>
                                            @endif
                                        </ul>
                                    </article>
                                </div>
                            @endif

                            @if(isset($contact->email_1) || isset($contact->email_2))
                                <div class="col-sm-10 col-md-6 col-lg-12">
                                    <h6>E-mail</h6>
                                    <hr class="divider-thin">
                                    <article class="box-inline">
                                        <ul class="list-comma">
                                            @if(isset($contact->email_1))
                                                <li><a href="mailto:{{ $contact->email_1 }}">{{ $contact->email_1 }}</a></li>
                                            @endif
                                            @if(isset($contact->email_2))
                                                <li><a href="mailto:{{ $contact->email_2 }}">{{ $contact->email_2 }}</a></li>
                                            @endif
                                        </ul>
                                    </article>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(isset($contact->longitude) && isset($contact->latitude))
        <section class="section">
            <div class="container container-bigger">
                <div class="google-map-container google-map-with-icon google-map-default google-map-sm">
                    <iframe id="google_map" style="width: 100%; height: 450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <script>
                        coords = "{{ $contact->longitude }}" + ', ' + "{{ $contact->latitude }}";
                        document.getElementById('google_map').setAttribute('src', 'https://maps.google.co.uk?q=' + coords + '&z=18&hl=bn&output=embed');
                    </script>
                </div>
            </div>
        </section>
    @endif

@stop

@section('style')
@stop

@section('script')
@stop