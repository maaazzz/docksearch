<?php

namespace App\Http\Livewire\Admin\Docks;

use App\Models\Dock;
use Livewire\Component;
use Livewire\WithPagination;

class DockList extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'Bootstrap';
    public $confirming;
    public function render()
    {
        return view('livewire.admin.docks.dock-list',[
            'docks' => Dock::with('user')->latest()->paginate(10),
        ]);
    }

    public function changeStatus($id)
    {
        if ($id) {
           $dock = Dock::findOrFail($id);
           if ($dock->dock_status == 1) {
               $dock->dock_status = 0;
               $dock->update();
               $this->dispatchBrowserEvent('alert',['message' => 'Dock Disapproved Succesfully']);
           }else{
               $dock->dock_status = 1;
               $dock->update();
               $this->dispatchBrowserEvent('alert',['message' => 'Dock Approved Succesfully']);
           }
        }
    }

    // confirm delete
    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Dock::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('error',['message' => 'Dock deleted successfully !!']);

    }


}
