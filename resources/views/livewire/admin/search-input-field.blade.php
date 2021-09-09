<div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                  <th>#</th>
                <th>Name</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($search_inputs as $input)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ ucwords(str_replace('_', ' ', $input->input_fields)) }}</td>
                    <td>
                        <label class="switcher switcher-success">
                            <input type="checkbox" wire:click="changeStatus({{ $input->id }})" class="switcher-input" {{ $input->status == 1 ? 'checked' : ''}}>
                            <span class="switcher-indicator">
                              <span class="switcher-yes">
                                <span class="ion ion-md-checkmark"></span>
                              </span>
                              <span class="switcher-no">
                                <span class="ion ion-md-close"></span>
                              </span>
                            </span>
                            <span class="switcher-label">{{ $input->status == 1 ? 'Approved' : 'Pending'}}</span>
                          </label>
                    </td>
                </tr>
                @empty
                    data not found
                @endforelse

            </tbody>

          </table>
        </div>
</div>
