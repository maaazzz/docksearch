<?php

namespace App\Http\Livewire\Admin;

use App\Models\SearchInputField as ModelsSearchInputField;
use Livewire\Component;

class SearchInputField extends Component
{
    public function render()
    {
        return view('livewire.admin.search-input-field',[
            'search_inputs' => ModelsSearchInputField::get(),
        ]);
    }

    public function changeStatus($id)
    {
        if ($id) {
           $input = ModelsSearchInputField::findOrFail($id);
           if ($input->status == 1) {
               $input->status = 0;
               $input->update();
               $this->dispatchBrowserEvent('alert',['message' => 'Statuts Changed Succesfully']);
           }else{
               $input->status = 1;
               $input->update();
               $this->dispatchBrowserEvent('alert',['message' => 'Statuts Changed Succesfully']);
           }
        }

    }
}
