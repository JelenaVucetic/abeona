@extends('layouts.app')

@section('content')
    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="contact-info">

                        <h2 class="block-title"><span>{{ __('Contact Us') }}</span></h2>

                        <div class="media-list">
                            <div class="media">
                                <i class="pull-left fa fa-phone"></i>
                                <div class="media-body">
                                    <strong>{{ __('Telephone') }}:</strong><br>
                                    +382 69 414 413 <br>
                                    +382 67 544 058 <br>
                                    +382 67 974 281
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    {{ __('Feel free to contact us on Viber and WhatsApp at any time for prompt and convenient customer support.') }}
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <strong>{{ __('Customer Service') }}:</strong><br>
                                    <a href="mailto:hello@rentit.com">abeonarentacar@gmail.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-8 text-left">

                    <h2 class="block-title"><span>{{ __('Contact Form') }}</span></h2>

                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="name">{{ __('Name') }}</label>
                                <input
                                    type="text" name="name" id="name" placeholder="{{ __('Name') }}" value="" size="30"
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="email">Email</label>
                                <input
                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                    data-toggle="tooltip" title="Email is required"
                                    class="form-control placeholder"/>
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="subject">{{ __('Subject') }}</label>
                                <input
                                    type="text" name="subject" id="subject" placeholder="{{ __('Subject') }}" value="" size="30"
                                    data-toggle="tooltip" title="Subject is required"
                                    class="form-control placeholder"/>
                            </div>
                        </div>

                        <div class="form-group af-inner">
                            <label class="sr-only" for="input-message">{{ __('Message') }}</label>
                            <textarea
                                name="message" id="input-message" placeholder="{{ __('Message') }}" rows="4" cols="50"
                                data-toggle="tooltip" title="Message is required"
                                class="form-control placeholder"></textarea>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme" id="submit_btn" value="{{ __('Send Message') }}" />
                            </div>
                        </div>

                    </form>
                    <!-- /Contact form -->

                </div>

            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section no-padding">
        <div class="container full-width">

            <!-- Google map -->
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
            <!-- /Google map -->

        </div>
    </section>
    <!-- /PAGE -->
@endsection
