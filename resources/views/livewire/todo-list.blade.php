<div>
    <div class="col-lg-6 mx-auto">

        {{-- create section --}}
        <div class="create-section" style="border-bottom: 2px solid red">
            @include('livewire.includes.create')
        </div>
        <div class="search-section mt-3">
            @include('livewire.includes.search')
        </div>

        {{-- read section --}}
        <div class="read-section mt-3">
            @foreach ($todos as $key => $todo)
                @include('livewire.includes.read')
            @endforeach
        </div>
        {{-- pagination --}}
        <nav aria-label="Page navigation">
            {{$todos->links()}}
        </nav>

    </div>
</div>
