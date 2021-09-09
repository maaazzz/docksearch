<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\DockShopSection;
use Livewire\Component;
use Livewire\WithPagination;

class AllRentListSettings extends Component
{
    use WithPagination;
    public $confirming;
    public function render()
    {
        return view('livewire.admin.setting.all-rent-list-settings',[
            'rentlists' => DockShopSection::latest()->paginate(10),
        ]);
    }

    // delete
    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        DockShopSection::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('alert',['message' => 'Data Deleted Succesfully']);
    }
}
