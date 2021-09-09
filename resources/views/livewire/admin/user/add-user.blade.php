<div>
    <div>
        <button type="button" class="btn btn-primary btn-sm float-right mb-2 mr-2" data-toggle="modal"
        data-target="#modals-top">Add User</button>
        <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Postal Code</th>
                <th>Date Of Birth</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                {{-- {{ dd($users) }} --}}
                @forelse ($users as $user)
                <tr>
                  <td>{{ $user->FullName }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->country }}</td>
                  <td>{{ $user->postal_code }}</td>
                  <td>{{ $user->date_of_birth }}</td>
                  <td>
                    @if ($confirming === $user->id)
                        <a wire:click="delete({{ $user->id }})"
                            class="btn btn-danger btn-sm">Sure?</a>
                    @else
                        <a wire:click="confirmDelete({{ $user->id }})"
                            class="btn btn-warning btn-sm">Delete</a>
                    @endif
                </td>
                </tr>
                @empty
                    <td>Data Not Found</td>
                @endforelse

            </tbody>

          </table>
         <div class="float-right"> {{ $users->links() }}</div>
        </div>
    </div>


    {{-- modal --}}
       @include('livewire.admin.user.create')

</div>
