  @props(['user'])

  <div class="py-10 flex items-center border-b-2 border-slate-200">

      {{-- user's avatar --}}
      <div class="w-1/3 flex justify-center overflow-hidden rounded-full">
          <img class="w-36 h-36 object-cover rounded-full"
              src="{{$user->avatar}}"
              alt="user's avatar">
      </div>

      {{-- profile info --}}
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
