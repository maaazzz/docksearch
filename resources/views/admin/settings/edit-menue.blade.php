@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin |Edit Menue')


{{-- page header --}}
@section('content-head')
   Edit Menue
@endsection

{{-- page content --}}
@section('content')

   <div class="row">
       <div class="col-md-8 offset-2">
        <div class="card">
            <form action="{{ route('menue.update',$menue->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h5>
                       Edit Menue #
                        <span class="font-weight-light">{{ $menue->id }}</span>
                        <br>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col mb-0">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control"
                                 value="{{ $menue->title }}">
                                @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col mb-0">
                            <label class="form-label">URL</label>
                            <input type="text" name="url" class="form-control" value="{{ $menue->url }}">
                            @error('url') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-sm btn-info float-right mb-2" value="Update">
                </div>
            </form>
        </div>
       </div>
   </div>
@endsection
                                                                                                          