<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="grid ga-4 space-x-1 md:grid-cols-3">
        @foreach ($posts as $post)
            <div class="px-2 py-3 bg-white border-2 border-slate-300 rounded">

                <h2 class="text-2xl font-bold text-slate-800">{{$post->title}}</h2>
                <p class="text-slate-600">
                    {{ $post->description }}
                </p>
                <div class="mb-1">
                    <span class="bg-blue-400 text-blue-100 rounded px-1 text-sm">
                        {{$post->category->name}}
                    </span>
                </div>
            </div>
        @endforeach

    </div>

    <div wire:loading class="flex items-center justify-center mt-10">
        <div style="border-top-color: transparent" class="w-16 h-16 boder-4 border-blue-400 border-solid rounded-full animate-spin">

        </div>
    </div>
</div>
