<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;


    public $search;

    public function create()
    {
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
        session()->flash('success', 'Created successfully!');

    }
    public function render()
    {
        $todos = Todo::latest()->where('name', 'like', "%$this->search%")->paginate(3);
        return view('livewire.todo-list',[ 'todos' => $todos]);
    }
}
