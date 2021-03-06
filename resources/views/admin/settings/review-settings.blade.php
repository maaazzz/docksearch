@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin | Settings')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/toastr/toastr.css">
@endsection
{{-- page header --}}
@section('content-head')
    Reviews Settings Form
@endsection

{{-- page content --}}
@section('content')
@livewire('admin.setting.review-settings')

@endsection
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
        })

    </script>
@endsection
              