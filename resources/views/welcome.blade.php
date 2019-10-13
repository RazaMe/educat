@extends('layouts.app')

@section('styles')
    <style>
        .white-content {
            /*background-image: url("/educat-logo.png");*/
        }
        .full-page  {
            background-image: url("/educat-logo.png") !important;
            background-repeat: no-repeat !important;
            background-size: 440px !important;
            background-position: center !important;
            background-position-y: 0px !important;
        }
        /*.text-light{*/
        /*    color: white !important;*/
        /*}*/
        .text-white{
            color: grey !important;
        }
    </style>
@endsection

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Use White Dashboard theme to create a great project.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
