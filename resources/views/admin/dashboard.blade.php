@extends('admin.layouts.master')
{{-- page title --}}
@section('title','Admin | Home')

{{-- page css --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/datatables/datatables.css">
@endsection


{{-- page header --}}
@section('content-head')
        Dashboard
@endsection


{{-- page content --}}
@section('content')
<div class="row">
    <div class="table-responsive">
        <table class="datatables-demo table table-hover table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Country</th>
              <th>Postal Code</th>
              <th>Date Of Birth</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>test hello</td>
                <td>test hello</td>
                <td>test hello</td>
                <td>test hello</td>
                <td>test hello</td>
                <td>
                    <button class="btn-sm btn-info">btn</button>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
</div>
@endsection


{{-- page scripts --}}
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('admin') }}/assets/vendor/libs/datatables/datatables.js"></script>
<script src="{{ asset('admin') }}/assets/js/tables_datatables.js"></script>
@endsection
