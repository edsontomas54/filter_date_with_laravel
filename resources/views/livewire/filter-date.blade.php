<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex items-center gap-2">
        <input wire:model="query" wire:keyup.debounce="filter" type="text" class="boder px-2 py-1" placeholder="Search for a post...">

        <select wire:model="category_id" wire:change="filters" class="border p-1 text-slate-600 text-lg rounded">
            <option value="">Select a Category</option>

            @foreach ($categories as $category)
            @if ($category !=null)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
            @endforeach
        </select>
    </div>

    <button wire:click="filter" >
        click
    </button>
</div>
