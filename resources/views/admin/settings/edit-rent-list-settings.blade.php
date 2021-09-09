@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin |Edit Review')


    {{-- page header --}}
@section('content-head')
    Edit Rentlist/Dock Shop Settings
@endsection

{{-- page content --}}
@section('content')
<div class="col-md-8 offset-md-2">
    <div class="card mb-4">
        <h6 class="card-header">
            Change RentList Settings
        </h6>

        <div class="card-body">
            <form action="{{ route('rent-list.update',$list->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div style="width:200px;height:150px">
                    <img src="{{ asset('storage/'.$list->photo) }}" alt="not found" class="img-fluid" name="image">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Photo</label>
                        <input type="file"  name="photo"  class="form-control-file"  value="{{ $list->photo }}">
                        @error('photo')
                            <span class="mt-1 text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="header" value="{{ $list->header }}">
                    @error('header')
                        <span class="mt-1 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-control"  name="description" cols="30" rows="7"  placeholder="Description">{{ $list->description }}</textarea>
                        @error('description')
                            <span class="mt-1 text-danger">{{ $message }}</span>
                       @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Link</label>
                    <input type="text" class="form-control"  placeholder="Link Text" name="link_text" value="{{ $list->link_text }}">
                    @error('link_text')
                        <span class="mt-1 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Redirect Link URL</label>
                    <input type="text" class="form-control" placeholder="Redirect URL must include https" name="redirect_link" value="{{ $list->redirect_link }}">
                    @error('redirect_link')
                        <span class="mt-1 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-info d-flex">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
