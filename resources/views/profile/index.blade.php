<x-app-layout>
    <div class="max-w-6xl px-4 mx-auto">

        <!--Profile header-->
        <div class="py-10 flex items-center border-b-2 border-slate-200">

            <!--Profile avatar-->

            <div class="w-1/3 flex justify-center overflow-hidden rounded-full">
                <img class="w-36 h-36 object-cover rounded-full"
                    src="https://images.unsplash.com/photo-1740124659051-71da6ea354e0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="avatar">
            </div>

            <!--Profile info-->
            <div>
                <div class="mb-3">
                    <h2 class="font-semibold text-xl">{{ $user->name }}</h2>
                </div>

                <div>
                    <ul class="flex gap-6">
                        <li>{{ __('followers: 301') }}</li>
                        <li>{{ __('following: 25') }}</li>
                        <li>{{ __('total posts: 123') }}</li>
                        <li>{{ __('posts: 97') }}</li>
                        <li>{{ __('photos: 50') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Profile nav-->
        <div class="py-4">
            <ul class="flex justify-center gap-10 text-gray-500">
                <li class="">
                    <x-nav-link :href="route('profile.index', $user->id)" :active="request()->is('profile/' . $user->id)">
                        POSTS
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('profile.showPhotos', $user->id)" :active="request()->is('profile/' . $user->id . '/photos')">
                        PHOTOS
                    </x-nav-link>
                </li>
            </ul>
        </div>

        <!--Profile content-->
        <div class="py-8">
            @if (request()->routeIs('profile.index'))
                <ul class="flex flex-col justify-center items-center gap-8">
                    @foreach (range(0, 4) as $post)
                        <li class="w-2/3">
                            <div class="border p-8">
                                <div class="flex gap-3 items-center mb-2">
                                    <div>
                                        <img class="w-16 h-16 object-cover rounded-full"
                                            src="https://images.unsplash.com/photo-1740124659051-71da6ea354e0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="avatar">
                                    </div>
                                    <div class="flex flex-col">
                                        <a href="#"
                                            class="font-medium w-fit inline hover:underline underline-offset-4">xynz</a>
                                        <span class="text-gray-600">01.10.22 в 12:05</span>
                                    </div>
                                </div>
                                <div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque
                                        temporibus
                                        architecto necessitatibus ducimus totam ipsa quasi deleniti iure provident
                                        veniam
                                        ex, laborum sed optio quod id quae minima illo. Inventore maxime earum odio
                                        neque
                                        est ullam. Quidem maxime at, optio sed, temporibus nobis amet fuga aliquid eius,
                                        corporis aut!</p>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            @else
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
                            <div class="border-2 pb-4 rounded-2xl">
                                <a href="#">
                                    <div class="h-96 overflow-hidden relative mb-3 rounded-2xl">
                                        <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                            src="https://plus.unsplash.com/premium_photo-1674316194408-979a3a6a907a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGNhdHN8ZW58MHx8MHx8fDA%3D"
                                            alt="user's photo">
                                    </div>
                                </a>
                                <div class="px-4 flex justify-center gap-10 text-lg">
                                    <span>Likes: 34</span>
                                    <a href="#" class="hover:underline">Comments: 45</a>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            @endif
        </div>
    </div>
</x-app-layout>
