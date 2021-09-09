<div>
    <div class="table-responsive">
        <a href="{{ route('review.settings') }}" class="btn btn-success btn-sm float-right mb-1">Add Reviews</a>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Review By</th>
                    <th>Review Text</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse($reviews as $review)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $review->image) }}" alt="not found" width="100" height="60">
                        </td>
                        <td>
                            {{ $review->review_by }}
                        </td>
                        <td>{{ Str::limit($review->review_text, 90, '...') }}</td>
                        <td>{{ date('Y-m-d', strtotime($review->created_at)) }}</td>
                        <td>
                            @if ($confirming === $review->id)
                                <a wire:click="delete({{ $review->id }})" class="btn btn-danger btn-sm">Sure?</a>
                            @else
                                <a wire:click="confirmDelete({{ $review->id }})" class="btn btn-warning btn-sm">Delete</a>
                            @endif
                            <a href="{{ route('review.edit', $review->id) }}" class="btn btn-info btn-sm mt-1">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <td style="font-size:20px">Data not found</td>
                @endforelse

            </tbody>

        </table>

        {{-- <div class="float-right"> {{ $docks->links('pagination::bootstrap-4') }}</div> --}}
    </div>

</div>
