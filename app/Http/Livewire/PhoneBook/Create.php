<?php
namespace App\Http\Livewire\PhoneBook;

use session;
use Livewire\Component;
use App\Models\PhoneBook;
use Livewire\WithPagination;


class Create extends Component
{
    use WithPagination;

    public $post;
    public $is_editable = false;
    // public $phoneId;

    public string $title = '';
    public string $description = '';
    public string $target_group = '';

    // public $get_contact = 2222;

    protected $listeners = [
        'triggerEditOnClick' => '$refresh',
        'newPost',
    ];

    // public function getListeners()
    // {
    //     return [
    //         "triggerEditOnClick:{$this->phoneId}" => 'refresh',
    //     ];
    // }

    protected $rules = [
        'title' => 'required|min:1',
        'description' => 'required|min:1 | max:100',
        'target_group' => 'required|min:1',
    ];

    public function mount($id)
    {

      $this->post = PhoneBook::find($id);

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.phone-book.create' );
    }

    public function newPost(PhoneBook $id)
   {
       $post = PhoneBook::find($id)->first();
       $this->post = $post;
       return view('livewire.phone-book.edit_modal',['post' => $post]);
   }

    public function refreshOnSave()
    {
        $validatedData = $this->validate();
        PhoneBook::create($validatedData);
        $this->emit('refreshOnSave');
        $this->reset(['title','description', 'target_group']);
        session()->flash('message', 'created data successfully !');
        // sleep(2);
        return redirect('/')->back();


    }
}
