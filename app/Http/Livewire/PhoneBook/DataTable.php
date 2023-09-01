<?php

namespace App\Http\Livewire\PhoneBook;

use Livewire\Component;
use App\Models\PhoneBook;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class DataTable extends Component
{
    use WithPagination;

    public $get_contact;
    public string $title = '';
    public string $description = '';
    public string $target_group = '';
    public $status = '';
    public $post;
    public $post_id;
    public $search = '';


    protected $queryString = ['search' => ['except' => '']];

    protected $listeners = [
        'refreshOnSave' => '$refresh',
    ];


    public function render()
    {

        $contacts = PhoneBook::latest()
            ->where( 'title', 'like', '%'.$this->search.'%')
            ->orWhere('description', 'like', '%'.$this->search.'%')
            ->orWhere('target_group', 'like', '%'.$this->search.'%')
            ->orWhere('status', 'like', '%'.$this->search.'%')
            // ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('livewire.phone-book.data-table', compact("contacts"));

    }

    public function fetchData(){

    }
    protected $rules = [
        'title' => 'required|min:1',
        'description' => 'required|max:100',
        'target_group' => 'required|min:1',
    ];
    public function mount($id)
    {
        $this->post = $id;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function viewContact($id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->first_name = $post->first_name;
        $this->last_name = $post->last_name;
        $this->phone_number = $post->phone_number;
        $this->emit('viewPost', $post);
    }

    public function viewBeforeDelete(PhoneBook $id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->target_group = $post->target_group;
        $this->status = $post->status;
        $this->emit('viewPost', $post);
      }

    public function showPost(PhoneBook $id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->target_group = $post->target_group;
        $this->status = $post->status;
        $this->emit('newPost', $post);
    }


    public function refreshOnUpdate($id)
    {

        $validatedData = $this->validate();
        $get_contact = PhoneBook::find($id)->first();

        PhoneBook::updateOrInsert(["id" => $id], $validatedData );
        $this->emitTo('phone-book.data-table', 'refreshOnUpdate');
        $this->modal_close = true;
        session()->flash('message', 'successfully updated .');

    }

    public function refreshOnDelete(PhoneBook $id)
    {

        $delete_contact = PhoneBook::find($id)->first();
        $delete_contact->delete(["id" => $delete_contact->$id]);
        $this->emitTo('phone-book.data-table','refreshOnDelete', $delete_contact->id);
        session()->flash('message', 'deleted data successfully !');
        // sleep(2);
        return redirect('/')->back();

    }


}
