<div wire:key="{{$todo->id}}" class="loop">
    <div class="d-flex justify-content-between">
        <div class="name">
            <h4 class="m-0">{{$todo->name}}</h4>
            <p class="text-muted">{{$todo->created_at}}</p>
        </div>
        <div class="button">
            <a href="" class="btn btn-warning me-2">Edit</a>
            <a href="" class="btn btn-danger me-2">Delete</a>
        </div>
    </div>
</div>
