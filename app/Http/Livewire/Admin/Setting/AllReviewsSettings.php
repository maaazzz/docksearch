<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ReviewSection;

class AllReviewsSettings extends Component
{
    use WithPagination;
    public $confirming;
    public function render()
    {
        return view('livewire.admin.setting.all-reviews-settings',[
            'reviews' => ReviewSection::latest()->paginate(10),
        ]);
    }
     // delete
     public function confirmDelete($id)
     {
         $this->confirming = $id;
     }

     public function delete($id)
     {
         ReviewSection::findOrFail($id)->delete();
         $this->dispatchBrowserEvent('alert',['message' => 'Data Deleted Succesfully']);
     }
}
