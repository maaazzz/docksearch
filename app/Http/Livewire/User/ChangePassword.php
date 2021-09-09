<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $old_password,$password,$password_confirmation;
    protected $rules=[
        'old_password' => 'required',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',
    ];

    public function updatePassword()
    {
        $this->validate();
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        if(!Hash::check($this->old_password, $user->password)){
            session()->flash('error','Password must be matched');
       }
       else{
            $user->password = Hash::make($this->password);
            $user->save();
            $this->reset();
            session()->flash('success','Password has been successfully updated');
       }
    }
    public function render()
    {
        return view('livewire.user.change-password');
    }
}
