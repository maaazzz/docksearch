<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\ReviewSection;
use Livewire\Component;
use Livewire\WithFileUploads;

class ReviewSettings extends Component
{
    use WithFileUploads;
    public $review_by,$review_text,$image;

    protected $rules = [
        'review_by' => 'required',
        'review_text' => 'required',
        'image' => 'required|image',
    ];
    public function submit()
    {
      $data =  $this->validate();
      $data['image'] = $this->image->store('website', 'public');
      ReviewSection::create($data);
      $this->reset();
      $this->dispatchBrowserEvent('alert',['message' => 'Record Inserted Successfully']);
    }
    public function render()
    {
        return view('livewire.admin.setting.review-settings');
    }
}
