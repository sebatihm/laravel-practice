<nav class="bg-white px-6 py-4 shadow">
    <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <div>
                <a class="text-gray-800 text-xl font-bold md:text-2xl" href="https://www.youtube.com/watch?v=0F1BsTyt_XU">Persona <span class="text-blue-500">3</span></a>
            </div>
            <div>
                <button type="button" @click="isOpen = !isOpen" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:-mx-4" :class="isOpen ? 'block' : ['hidden' , 'md:block']">
            <a class="{{ request()->routeIs('main')     ?  'text-blue-500'  :   "my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" }}" href= "<?= route('main')?>">Home </a>
            <a class="{{ request()->routeIs('groups.*') ?  'text-blue-500'  :   "my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" }}" href="<?= route('groups.index')?>">Groups </a>
            @auth
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" type="submit">Log out</button>
                </form>
            @endauth
            
        </div>


        {{-- <form method="POST" action="{{ route('logout') }}">@csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link> --}}
            {{-- <form action="{{  route('groups.destroy', $enroll) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="{{ request()->routeIs('test')     ?  'text-blue-500'  :   "my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" }}" type="submit">Delete</button>
            </form> --}}

    </div>
</nav>
