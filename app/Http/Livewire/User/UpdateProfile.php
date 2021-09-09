<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;

class UpdateProfile extends Component
{
    public $title,$first_name,$last_name,$country,$postal_code,$date_of_birth;

    protected $rules = [
        'title' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'country' => 'required',
        'postal_code' => 'required',
        'date_of_birth' => 'required',
    ];
    public function mount()
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $this->title = $user->title;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->country = $user->country;
        $this->postal_code = $user->postal_code;
        $this->date_of_birth = $user->date_of_birth;
    }

    public function updateProfile()
    {
        $this->validate();
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $user->title = $this->title;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->country = $this->country;
        $user->postal_code = $this->postal_code;
        $user->date_of_birth = $this->date_of_birth;
        $user->save();
        session()->flash('success','Profile Update Succesfully');

    }
    public function render()
    {
        return view('livewire.user.update-profile');
    }
}
