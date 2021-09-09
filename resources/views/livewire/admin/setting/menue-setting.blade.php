<div>
    <div>
        <button type="button" class="btn btn-primary btn-sm float-right mb-2 mr-2" data-toggle="modal"
            data-target="#modals-top">Add Menu</button>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($menues as $menue)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $menue->title }}</td>
                            <td>{{ $menue->url }}</td>
                            <td>
                                @if ($confirming == $menue->id)
                                    <a wire:click="delete({{ $menue->id }})" class="btn btn-danger btn-sm">Sure?</a>
                                @else
                                    <a wire:click="confirmDelete({{ $menue->id }})"
                                        class="btn btn-warning btn-sm">Delete</a>
                                @endif
                                <a href="{{ route('menue.edit',$menue->id) }}"  class="btn btn-info btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @empty
                        <td>Data Not Found</td>
                    @endforelse

                </tbody>

            </table>
            {{-- <div class="float-right"> {{ $menues->links() }}</div> --}}
        </div>
    </div>


    {{-- modal --}}
    <div wire:ignore.self class="modal fade show" id="modals-top">
        <div class="modal-dialog modal-lg">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Add Menue Item
                        <br>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col mb-0">
                            <label class="form-label">Title</label>
                            <input type="text" wire:model.lazy="title" class="form-control" placeholder="Title">
                            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col mb-0">
                            <label class="form-label">URL</label>
                            <input type="text" wire:model.lazy="url" class="form-control" placeholder="URL">
                            @error('url') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>




</div>
