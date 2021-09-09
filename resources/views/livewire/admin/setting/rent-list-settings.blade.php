<div>
    <div>
        <div class="col-md-8 offset-md-2">
            <div class="card mb-4">
                <h6 class="card-header">
                    Change RentList Settings
                </h6>

                <div class="card-body">
                    <form wire:submit.prevent="submit" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="form-label">Photo</label>
                                <input type="file" name="photo"  wire:model="photo" id="upload{{ $iteration }}" class="form-control-file"  >
                                @error('photo')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                                @if ($photo)
                                <img class="mt-2 img-fluid" src="{{ $photo->temporaryUrl() }}" width="250" height="200">
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="Title" wire:model.lazy="header">
                            @error('header')
                                <span class="mt-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control"  wire:model.lazy="description" cols="30" rows="7"  placeholder="Description"></textarea>
                                @error('description')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control"  placeholder="Link Text" wire:model.lazy="link_text">
                            @error('link_text')
                                <span class="mt-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Redirect Link URL</label>
                            <input type="text" class="form-control" placeholder="Redirect URL must include https" wire:model.lazy="redirect_link">
                            @error('redirect_link')
                                <span class="mt-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex">
                            <a href="{{ route('all.rentlist.settings') }}" class="btn btn-warning btn-sm">Back</a>
                            <button type="submit" class="btn btn-info btn-sm d-flex ml-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
