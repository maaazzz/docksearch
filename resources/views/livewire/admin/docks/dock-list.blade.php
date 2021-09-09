<div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Marine Name</th>
                <th>List Type</th>
                <th>Price</th>
                <th>Country</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($docks as $dock)
                <tr>
                    <td>{{ $dock->user->first_name }}</td>
                    <td>{{ $dock->marine_name}}</td>
                    <td>{{ $dock->list_type}}</td>
                    <td>{{ $dock->price != null ? $dock->price : $dock->price_for_rent}}</td>
                    <td>{{ $dock->dock_country}}</td>
                    <td>{{ $dock->dock_address_one}}</td>
                    <td>
                        <label class="switcher switcher-success">
                            <input type="checkbox" wire:click="changeStatus({{ $dock->id }})" class="switcher-input" {{ $dock->dock_status == 1 ? 'checked' : ''}}>
                            <span class="switcher-indicator">
                              <span class="switcher-yes">
                                <span class="ion ion-md-checkmark"></span>
                              </span>
                              <span class="switcher-no">
                                <span class="ion ion-md-close"></span>
                              </span>
                            </span>
                            <span class="switcher-label">{{ $dock->dock_status == 1 ? 'Approved' : 'Pending'}}</span>
                          </label>
                    </td>
                    <td>
                        @if ($confirming === $dock->id)
                        <a wire:click="delete({{ $dock->id }})"
                            class="btn btn-danger btn-sm">Sure?</a>
                        @else
                            <a wire:click="confirmDelete({{ $dock->id }})"
                                class="btn btn-warning btn-sm">Delete</a>
                        @endif
                    </td>
                </tr>
                @empty
                    data not found
                @endforelse
            </tbody>

          </table>
            <div class="float-right"> {{ $docks->links('pagination::bootstrap-4') }}</div>
        </div>
</div>
