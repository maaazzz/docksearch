@extends('admin.layouts.master')
{{-- page title --}}
@section('title','Admin | Home')

{{-- page css --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/toastr/toastr.css">
<style>
    .error{
        color: red;
    }
</style>
@endsection

{{-- page header --}}
@section('content-head')
        User Managment
@endsection


{{-- page content --}}
@section('content')
<div class="row">

    <div class="col-md-12">
        @livewire('admin.user.add-user')
        </div>
    </div>


@endsection


{{-- page scripts --}}
@section('scripts')
<script src="{{ asset('admin') }}/assets/vendor/libs/toastr/toastr.js"></script>
<script>
    $('document').ready(function(){
        toastr.options = {
            'positionClass': 'toast-bottom-right',
            'progreesBar' : 'true',
        }

        window.addEventListener('alert',event => {
            toastr.success(event.detail.message,'Success!')
        });
        window.addEventListener('error',event => {
            toastr.error(event.detail.message,'Error!')
        });

        window.addEventListener('show-delete-modal',event => {
            $('#deleteModal').modal('show');
        });
        window.addEventListener('hide-modal',event => {
            $('#edit-modals').modal('hide');
        });
    });
</script>
@endsection
