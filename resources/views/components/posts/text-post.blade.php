@props(['post'])

<div class="border p-8 pb-4">
    <x-posts.post-header :post="$post" />
    <div class="mb-2">
        <p>{{ $post->content }}</p>
    </div>
    <x-posts.post-footer></x-posts.post-footer>
</div>
