@props(['user'])

<div class="py-8">
    @if (request()->routeIs('profile.index'))
        <ul class="flex flex-col justify-center items-center gap-8">
            @foreach (range(0, 4) as $post)
                <li class="w-2/3">
                    <x-posts.text-post />
                </li>
            @endforeach

        </ul>
    @elseif (request()->routeIs('profile.showPhotos'))
        <ul class="grid grid-cols-3 gap-5">
            @foreach (range(0, 6) as $post)
                <li>
                    <div class="border-2 pb-4 rounded-2xl">
                        <a href="#">
                            <div class="h-96 overflow-hidden relative mb-3 rounded-2xl">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://images.unsplash.com/photo-1536589961747-e239b2abbec2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="user's photo">
                            </div>
                        </a>
                        <div class="px-4 flex justify-center gap-10 text-lg">
                            <span>Likes: 34</span>
                            <a href="#" class="hover:underline">Comments: 45</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border-2 pb-4 rounded-2xl">
                        <a href="#">
                            <div class="h-96 overflow-hidden relative mb-3 rounded-2xl">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://plus.unsplash.com/premium_photo-1677545182067-26ac518ef64f?q=80&w=2156&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="user's photo">
                            </div>
                        </a>
                        <div class="px-4 flex justify-center gap-10 text-lg">
                            <span>Likes: 34</span>
                            <a href="#" class="hover:underline">Comments: 45</a>
                        </div>
                    </div>
                </li>
                <li>
                    <x-posts.photo-post>
                    </x-posts.photo-post>
                </li>
            @endforeach

        </ul>
    @endif
</div>
