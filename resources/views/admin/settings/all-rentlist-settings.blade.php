@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin | Rent Lists')

    {{-- page css --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/toastr/toastr.css">
    <style>
         .error {
            color: red;
        }
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

    </style>

@endsection


{{-- page header --}}
@section('content-head')
   Rent List Settings
@endsection


{{-- page content --}}
@section('content')
    <div class="row">

        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">??</button>
                {{ session('success') }}
              </div>
          @endif
            @livewire('admin.setting.all-rent-list-settings')
        </div>
    </div>
@endsection
{{-- page scripts --}}
@section('scripts')
    <script src="{{ asset('admin') }}/assets/vendor/libs/toastr/toastr.js"></script>
    <script>
        $('document').ready(function() {
            toastr.options = {
                'positionClass': 'toast-bottom-right',
                'progreesBar': 'true',
            }

            window.addEventListener('alert', event => {
                toastr.success(event.detail.message, 'Success!')
            });
            $('.alert').delay(2000).fadeOut('slow');
        })

    </script>
@endsection
