<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Rule('required|min:3|max:50')]
    public $name;
    public $search;

    public $editingTodoID;

    #[Rule('required|min:3|max:50')]
    public $editingTodoName;

    public function edit($todoID){
        $this->editingTodoID = $todoID;
        $this->editingTodoName = Todo::find($todoID)->name;
    }

    public function cancleEdit(){
        $this->reset('editingTodoID', 'editingTodoName');
    }

    public function update(){
        $this->validateOnly('editingTodoName');
        Todo::find($this->editingTodoID)->update([
            'name' => $this->editingTodoName
        ]);
        $this->cancleEdit();
    }

    public function create(){
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
        session()->flash('success', 'Created successfully!');
    }

    public function delete($id){
        $todo = Todo::findOrFail($id);
        if($todo)
        {
            $todo->delete();
            session()->flash('success', 'Todo deleted successfully!');
        }else{
            session()->flash('error', 'Record not found!');
        }
    }

    public function toggle($id){
        $todo = Todo::findOrFail($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
 

    public function render(){
        $todos = Todo::latest()->where('name', 'like', "%$this->search%")->paginate(5);
        return view('livewire.todo-list',[ 'todos' => $todos]);
    }
}
