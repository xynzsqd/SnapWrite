@props(['post'])

@php
    use Carbon\Carbon;
    $date = Carbon::parse($post->created_at)->format('d.m.y в H:i');
@endphp


<div {{ $attributes->merge(['class' => 'flex gap-3 items-center']) }}>
    <div>
        <img class="w-16 h-16 object-cover rounded-full" src="{{ $post->user->avatar }}" alt="avatar">
    </div>
    <div class="flex flex-col">
        <a href="#" class="font-medium w-fit inline hover:underline underline-offset-4">{{ $post->user->name }}</a>
        <span class="text-gray-600">{{$date}}</span>
    </div>
</div>
