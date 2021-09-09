<?php

namespace App\Http\Livewire\Admin\Setting;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class MenueSetting extends Component
{
    use WithPagination;
    public $title, $url;
    public $confirming;
    public $editModal = false;
    public $rules = [
        'title' => 'required|max:16',
        'url' => 'required',
    ];


    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {
        $data = $this->validate();
        DB::table('menues')->insert($data);
        $this->reset();
        $this->dispatchBrowserEvent('closeModal'); // Close model
        $this->dispatchBrowserEvent('alert', ['message' => 'Data Inserted Succesfully']);
    }


    /**
     * confirmDelete
     *
     * @param  mixed $id
     * @return void
     */
    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        try {
            DB::table('menues')->delete($id);
            } catch (\Throwable $th) {
            return $th;
        }

        $this->dispatchBrowserEvent('alert', ['message' => 'Data Deleted Succesfully']);
    }

    public function render()
    {
        return view('livewire.admin.setting.menue-setting', [
            'menues' => DB::table('menues')->paginate(10),
        ]);
    }
}
