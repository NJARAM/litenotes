<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse($notes as $note)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2xl">{{$note->title}}</h2>

                <p class="mt-2">{{Str::limit($note->text,200)}}</p>
                <span>{{$note->updated_at->diffForHumans()}}</span>
            </div>
            @empty
            <p>You have no notes yet!</>
            @endforelse
            {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
