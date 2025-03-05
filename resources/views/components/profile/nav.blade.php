@props(['user'])

@php
    $isPostsUrl = request()->is('profile/' . $user->id);
    $isPhotosUrl = request()->is('profile/' . $user->id . '/photos');
@endphp


<div class="py-4">
    <ul class="flex justify-center gap-10 text-gray-500 uppercase">
        <li>
            <x-nav-link :href="route('profile.index', $user->id)" :active="$isPostsUrl">
                posts
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('profile.showPhotos', $user->id)" :active="$isPhotosUrl">
                photos
            </x-nav-link>
        </li>
    </ul>
</div>
