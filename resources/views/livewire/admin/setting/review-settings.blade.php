<div>
    <div>
        <div>
            <div class="col-md-8 offset-md-2">
                <div class="card mb-4">
                    <h6 class="card-header">
                        Change RentList Settings
                    </h6>
                    <div class="card-body">
                        <form wire:submit.prevent="submit">

                            <div class="form-group">
                                <label class="form-label">Review By</label>
                                <input type="text" class="form-control" placeholder="Review by"
                                    wire:model.lazy="review_by">
                                @error('review_by')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" wire:model.lazy="image">
                                @error('image')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($image)
                                Photo Preview:
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid" width="300" height="250">
                            @endif
                            <div class="form-group">
                                <label class="form-label">Review</label>
                                <textarea class="form-control" wire:model.lazy="review_text" cols="30" rows="7"
                                    placeholder="Review Text"></textarea>
                                @error('review_text')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('all.reviews.settings') }}" class="btn btn-warning btn-sm">Back</a>
                                <button type="submit" class="btn btn-info btn-sm d-flex ml-2">Submit <div wire:loading
                                        wire:loading.delay wire:target="submit" class="ml-3 mt-1 loader">Loading...
                                    </div>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
