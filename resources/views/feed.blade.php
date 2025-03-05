<x-app-layout>
    <div class="max-w-6xl px-4 mx-auto">
    <ul class="flex flex-col justify-center items-center gap-8">
        @foreach (range(0, 4) as $post)
            <li class="w-2/3">
                <x-posts.text-post />
            </li>
            <li class="w-2/3">
                <div class="border py-8 px-4">
                    <div class="flex gap-3 items-center mb-2">
                        <div>
                            <img class="w-16 h-16 object-cover rounded-full"
                                src="https://images.unsplash.com/photo-1740124659051-71da6ea354e0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="avatar">
                        </div>
                        <div class="flex flex-col">
                            <a href="#" class="font-medium w-fit inline hover:underline underline-offset-4">xynz</a>
                            <span class="text-gray-600">01.10.22 в 12:05</span>
                        </div>
                    </div>
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
        @endforeach
    </ul>
</div>

</x-app-layout>
