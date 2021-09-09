<div>
    <div class="table-responsive">
        <a href="{{ route('rent.settings') }}" class="btn btn-success btn-sm float-right mb-1">Add Rent Lists</a>
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Photo</th>
                <th>Header</th>
                <th>Description</th>
                <th>Link Text</th>
                <th>Redirect Link</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

                @forelse($rentlists as $list)
                <tr>
                        <td>
                            <img src="{{ asset('storage/'.$list->photo) }}" alt="" width="100px" height="100px" alt="not found">
                        </td>
                        <td>{{ $list->header }}</td>
                        <td style="width:30%">{{ Str::limit($list->description, 120,'...') }}</td>
                        <td>{{ $list->link_text ?? 'Not found' }}</td>
                        <td style="width:20%">{{ $list->redirect_link }}</td>
                        <td>
                            @if ($confirming === $list->id)
                                <a wire:click="delete({{ $list->id }})"
                                    class="btn btn-danger btn-sm">Sure?</a>
                            @else
                                <a wire:click="confirmDelete({{ $list->id }})"
                                    class="btn btn-warning btn-sm">Delete</a>
                            @endif
                            <a href="{{ route('rent-list.edit',$list->id) }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                </tr>
                @empty
                <td style="font-size:20px">Data not found</td>
            @endforelse

            </tbody>

          </table>

         <div class="float-right"> {{ $rentlists->links('pagination::bootstrap-4') }}</div>
        </div>
</div>
