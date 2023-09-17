<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\ContactUs;
use Livewire\Component;

class ContactedMessages extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function delete($id)
    {
        ContactUs::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.admin.contacted-messages',[
            'clients' => ContactUs::where('name','LIKE','%'.$this->search.'%')
            ->latest()->paginate(50)
        ])->layout('admin.layouts.wire_app');
    }
}
