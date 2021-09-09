@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin |Edit Review')


{{-- page header --}}
@section('content-head')
   Edit Review
@endsection

{{-- page content --}}
@section('content')

   <div class="row">
       <div class="col-md-8 offset-2">
        <div class="card">
            <form action="{{ route('review.update',$review->id) }}" method="post" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h5>
                       Edit Review #
                        <span class="font-weight-light">{{ $review->id }}</span>
                        <br>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="" class="form-label">Photo</label>
                                <input type="file"  name="image"  class="form-control-file"  value="{{ $review->image }}">
                                @error('image')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col mb-0">
                            <label class="form-label">Review By</label>
                            <input type="text"name="review_by" class="form-control"
                                placeholder="Review Name" value="{{ $review->review_by }}">
                                @error('review_by') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div><br>
                    <div class="form-row">
                        <div class="form-group col mb-0">
                            <label class="form-label">Review Text</label>
                            <textarea name="review_text"  cols="30" rows="7" class="form-control">
                                {{ $review->review_text }}
                            </textarea>
                            @error('review_text') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <input type="submit" class="btn btn-sm btn-info float-right mb-2 mt-2" value="Update">
                </div>
            </form>
        </div>
       </div>
   </div>
@endsection
