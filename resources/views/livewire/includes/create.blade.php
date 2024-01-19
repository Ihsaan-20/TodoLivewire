<div>
    <h1 class="text-center">Todo with Livewire</h1>
</div>
<form action="">
    <div class="mb-3">
        <label for="">Name</label>
        <input wire:model="name" type="text" class="form-control" name="name" id="name" placeholder="Todo name...">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <button wire:click.prevent="create" type="submit" class="btn btn-primary">+ Create</button>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>{{ session('success') }}</strong>
        </div>

        @endif
    </div>
</form>

