@props(['posts'])

<x-app-layout>
    <div class="max-w-6xl px-4 mx-auto">
    <ul class="flex flex-col justify-center items-center gap-8">
        @foreach ($posts as $post)
            <li class="w-2/3">
                <x-posts.text-post :post="$post" />
            </li>
            {{-- <li class="w-2/3">
                <x-posts.photo-post :post="$post" />
            </li> --}}
        @endforeach
    </ul>
</div>

</x-app-layout>
