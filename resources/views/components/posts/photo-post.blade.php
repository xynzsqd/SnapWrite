@props(['post'])

@php
    $isFeedRoute = request()->routeIs('feed');

    $classes = $isFeedRoute ? 'border-2 p-8 pb-4' : 'border-2 pb-4 rounded-2xl';
@endphp

<div {{$attributes->merge(['class' => $classes])}}>
        @if ($isFeedRoute)
            <x-posts.post-header class="mb-2" :post="$post" />
        @endif
    <div>
        <a href="#">
            <div class="h-96 overflow-hidden relative mb-3 rounded-2xl">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                    src="https://plus.unsplash.com/premium_photo-1674316194408-979a3a6a907a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGNhdHN8ZW58MHx8MHx8fDA%3D"
                    alt="user's photo">
            </div>
        </a>
    </div>
        <x-posts.post-footer></x-posts.post-footer>
</div>
