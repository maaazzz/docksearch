<?php

namespace App\Http\Livewire\Admin\User;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class AddUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $first_name,$last_name,$email,$password,$password_confirmation,$country,$postal_code,$date_of_birth;
    public $confirming;

    // insert data
    public function save()
    {
        $data = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'country' => 'required',
            'postal_code' => 'required',
            'date_of_birth' => 'required',
        ]);

        User::create($data);
        $this->reset();
        $this->dispatchBrowserEvent('closeModal'); // Close model
        $this->dispatchBrowserEvent('alert',['message' => 'User added successfully !!']);
        // $this->emit('reviewSectionRefresh');
    }

    // confirm delete
    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('error',['message' => 'User deleted successfully !!']);

    }
    public function render()
    {
        return view('livewire.admin.user.add-user',[
            'users' => User::latest()->paginate(10),
        ]);
    }
}
