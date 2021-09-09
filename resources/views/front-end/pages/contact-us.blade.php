@extends('front-end.layouts.master')
@section('title', 'DockSearch | Contact Us')

@section('styles')
    <style>
        input,
        textarea {
            border: 2px solid rgba(59, 53, 53, 0.156) !important;
            border-radius: 4px;
        }

        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: rgba(53, 47, 47, 0.616);
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }

    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
            <div class="fixed-bg" style="background-image: url({{ url('storage/'.$site_setting->contact_us_banner) }})">
            </div>
            <div class="container">
                <div class="pg-tp-wrp text-center w-100">
                    <h1 class="mb-0">Contact Us</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-5 pb-120 gray-bg position-relative">
            <div class="container">
                <div class="get-touch-wrap w-100">
                    @livewire('front-end.contact-us')
                </div><!-- Get In Touch Style --->
               @if ($site_setting->contact_page_ad)
               <div class="mt-5 ">
                    <iframe style="width:120px;height:240px;"  scrolling="no" frameborder="0" src="<?php echo $site_setting->contact_page_ad  ?>">
                    </iframe>
                </div>
               @endif
        </div>
    </section>
@endsection
