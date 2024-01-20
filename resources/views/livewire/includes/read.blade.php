<div wire:key="{{$todo->id}}" class="card mb-3 p-3">
    <div class="d-flex justify-content-between">

        <div class="d-flex gap-2 align-items-center name">
            @if($todo->completed)
                <input wire:click="toggle({{ $todo->id }})" type="checkbox" checked>
            @else
                <input wire:click="toggle({{ $todo->id }})" type="checkbox">
            @endif
            
            <div>
                @if ($editingTodoID === $todo->id)
                    <input wire:model="editingTodoName" type="text" placeholder="Todo name..." 
                         class="form-control">
                   <div>
                    @error('editingTodoName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   </div>
                @else
                    <h4 class="m-0">{{$todo->name}}</h4>
                @endif
                <p class="text-muted">{{$todo->created_at}}</p>
                <div>
                    @if ($editingTodoID === $todo->id)
                    <button wire:click="update" class="btn btn-success">Update</button>
                    <button wire:click="cancleEdit" class="btn btn-danger">Cancle</button>
                    @endif
                </div>
            </div>
            
        </div>

        <div class="button d-flex align-items-center">
            <button wire:click="edit({{ $todo->id }})"  class="btn btn-warning me-2">Edit</button>
            <button wire:click="delete({{ $todo->id }})"  class="btn btn-danger me-2">Delete</button>
        </div>

    </div>
    
</div>
