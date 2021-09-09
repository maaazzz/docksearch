<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\DockShopSection;
use Livewire\Component;
use Livewire\WithFileUploads;

class RentListSettings extends Component
{
    use WithFileUploads;
    public $photo,$header,$description,$link_text,$redirect_link,$iteration;
    // protected  $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
    protected $rules = [
        'photo' => 'required|image',
        'header' => 'required',
        'description' => 'required',
        'link_text' => 'required',
        'redirect_link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
    ];
    public function submit()
    {
      $data =   $this->validate();
      $data['photo'] = $this->photo->store('website','public');
      DockShopSection::create($data);
      $this->photo = null;
      $this->iteration++;
      $this->reset();
      $this->dispatchBrowserEvent('alert',['message' => 'Record Inserted Succesfully']);
    }
    public function render()
    {
        return view('livewire.admin.setting.rent-list-settings');
    }
}
