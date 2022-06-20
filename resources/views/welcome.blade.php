@extends('layout.layout')
@section('content')
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @forelse($posts as $key => $post)
        @if($loop->first)
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="#"
                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">{{ $post->category->title }}</a>

                                <a href="#"
                                class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    {{ $post->title }}
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                            {{ $post->body }}
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="#"
                                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
        @endif
        
        @if($posts->count() > 1)
            <div class="lg:grid lg:grid-cols-6">
                @foreach ($posts->skip(1) as $post)
                <div class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
            
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">{{ $post->category->title }}</a>
            
                                        <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">Updates</a>
                                    </div>
            
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            {{ $post->title }}
                                        </h1>
            
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                        </span>
                                    </div>
                                </header>
            
                                <div class="text-sm mt-4">
                                    <p>
                                    {{ $post->body }}
                                    </p>
                                </div>
            
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
            
                                    <div>
                                        <a href="#"
                                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        @endif
    @empty
        
    @endforelse

    {{-- <div class="lg:grid lg:grid-cols-2">
        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
                <div>
                    <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>

                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="./images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >
                                Read More
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
                <div>
                    <img src="./images/illustration-2.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>

                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="./images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >
                                Read More
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
                <div>
                    <img src="./images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>
                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="./images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >Read More</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
                <div>
                    <img src="./images/illustration-4.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>

                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="./images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >
                                Read More
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5">
                <div>
                    <img src="./images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>
                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="./images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >
                                Read More
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </div> --}}
</main>




@endsection