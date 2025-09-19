<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"rel="stylesheet" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen scroll-auto">
    <header class="bg-[#001840] h-15">
        <div class="flex text-nowrap justify-between items-center p-2.5 w-[85%] mx-auto">
            <a href="/">
                <img class="w-12 h-12"
                    src="https://images-platform.99static.com//ZhRjGjw-f9DnuFcS0MLa_rt-Xtg=/796x702:1333x1239/fit-in/500x500/projects-files/134/13414/1341412/f2fb5d50-afe3-4269-962d-3d4cc50b86a9.jpg"
                    alt="logo">
            </a>
            <div
                class="nav-links bg-white md:bg-transparent duration-500 md:static absolute md:min-h-fit min-h-[22vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-2">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a href="{{ url('/') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="/about"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            ABOUT
                        </a>
                    </li>
                    <li>
                        <a href="/articles"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            ARTICLES
                        </a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            CONTACT US
                        </a>
                    </li>
                </ul>
            </div>
            <div class="relative inline-block text-left h-[44px]">
                @if (Auth::check())
                <div class="flex flex-row gap-6">
                    <button id="userBtn"
                        class="bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                        {{ auth()->user()->name }}
                    </button>
                    <div class="flex items-center gap-6">
                        <ion-icon onclick="onToggleMenu(this)" name="menu"
                            class="text-3xl cursor-pointer md:hidden fill-current:white text-white"></ion-icon>
                    </div>
                </div>
                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex gap-1 w-full text-left px-4 py-2 hover:bg-gray-200">
                            Déconnexion
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 my-auto ml-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                        </button>
                    </form>
                    <button class="flex gap-1 w-full text-left px-4 py-2 hover:bg-gray-200">
                        <a href="{{ route('profile.edit') }}">Profil</a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 my-auto ml-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </button>
                </div>
                @else
               <div class="flex flex-row gap-6">
                    <div class="flex items-center gap-6">
                        <button
                            class="bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                            <a class=" py-3 px-5" href="{{ route('login') }}">LOGIN</a>
                        </button>
                    </div>
                    <div class="flex items-center gap-6">
                        <ion-icon onclick="onToggleMenu(this)" name="menu"
                            class="text-3xl cursor-pointer md:hidden fill-current:white text-white"></ion-icon>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </header>
    <div class="w-full h-64 md:h-96 bg-cover bg-center"
        style="background-image: url('https://i.pinimg.com/736x/ae/48/4a/ae484a15a84631934a735e96ad73147d.jpg');">
        <div class="h-full inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
            <div class="flex flex-col items-center gap-8">
                <h1
                    class="text-4xl font-bold text-responsive-body text-white text-xl sm:text-2xl md:text-4xl lg:text-5xl font-bold">
                    WELCOME TO YOUR BLOG WEBSITE</h1>
                <p class="text-white text-responsive-body text-sm sm:text-base md:text-lg">Share your kwonledges about
                    themes that interest you...</p>
                <div> </div>
                <div> </div>
                <button
                    class="flex justify-center w-60 bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                    <a href="{{ route('articles.create') }}">Let's write an article</a>
                </button>
            </div>
        </div>
    </div>
    <section class="p-5 mt-1 py-16 text-center text-white bg-cover bg-center w-full">
        <div class="grid grid-cols-2">
            <div class="mx-auto max-w-md overflow-hidden rounded-xl bg-white shadow-md md:max-w-2xl">
                <div class="grid grid-cols-1 bg-[#001840]">
                    <div class="bg-[#001840] grid grid-cols-2 py-2 p-3">
                        <div class="flex flex-row gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="grey" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <h1 class="block text-lg leading-tight font-medium text-white">
                                {{ $article->user->name }}
                            </h1>
                        </div>
                        <div class="flex flex-row-reverse">
                            <div class="relative inline-block text-left">
                                @if(Auth::check() && auth()->user()->id === $article->user->id)
                                <button type="button"
                                    class="kebab-menu-btn flex items-center justify-center w-10 h-10 text-gray-600 hover:text-gray-900 focus:outline-none"
                                    class="kebab-menu-btn">
                                    <svg class="w-6 h-6" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zm0 6a2 2 0 110-4 2 2 0 010 4zm0 6a2 2 0 110-4 2 2 0 010 4z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>

                                <div
                                    class="kebab-menu hidden absolute right-0 w-48 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <div class="py-1">
                                        <a href="{{ route('articles.create') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Add</a>
                                        <a href="{{ url('articles', ['id' => $article->id]) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Details</a>
                                        <a href="{{ url('articles', ['id' => $article->id]) }}/edit"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this article?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                    <hr>
                    <div class="grid grid-cols-2 bg-[#001840]">
                        <div class="flex flex-row p-5">
                        <h1 class="font-bold text-white mt-2">{{ $article->title }}</h1>
                        </div>
                        <div class="flex flex-row-reverse p-5 text-gray-400">
                            {{ $article->created_at }}
                        </div>
                    </div>
                    <hr>
                    <div class="md:flex flex-col">
                        <div class="md:shrink-0 p-4">
                            <img class="w-60 h-60 md:flex h-50 w-full"
                                    src="{{ $article->image }}"
                                    alt="logo">
                        </div><hr>
                        <div class="p-8 bg-[#001840]">
                            <p class="text-gray-500">
                                {{ $article->description }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="p-8 flex flex-row justify-center bg-[#001840]">
                        @if(Auth::check() && auth()->user()->name === $article->user->name)
                        <div class="flex flex-row gap-2">
                            <button
                                class="flex justify-center w-auto bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                                <a href="{{ route('articles.create') }}">COMMENT</a>
                            </button>
                            <button
                                class="flex justify-center w-auto bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                                <a href="{{ url('articles' , [ 'id' => $article->id ]) }}/edit">EDIT</a>
                            </button>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex justify-center w-auto bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                                DELETE
                            </button>
                            </form>
                            <div class="commentForm flex flex-row gap-2 hidden">
                                <form action="" method="post">
                                <input type="text" class="w-80 text-white py-2 px-3 rounded-full hover:bg-[#a1a19f5d] hover:text-black">
                                <button
                                    class="w-40 bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                                    <a href="{{ url('articles' , [ 'id' => $article->id ]) }}/edit">Edit</a>
                                </button>
                            </div>
                        </div>
                        @else
                        <div class="flex flex-row gap-2">
                        <button
                            class="flex justify-center w-60 bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                            <a href="/">Back</a>
                        </button>
                        </div>
                        @endif
                    </div>
            </div>
            <div class="felx flex-cols-2 py-2 px-8">
                <div class="flex flex-row">

                </div>
                <div class="flex flex-row">
                    <div class="flex justify-center mt-8">
                        <div class="w-auto flex flex-row gap-2">
                            <input type="text" name="search" placeholder="Your comment..." value="comment" class="w-full p-3 pl-10 rounded-full bg-gray-200" autocomplete="off">
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                @csrf
                                @method('POST')
                                <button type="submit" class="flex justify-center w-auto bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                                Comment
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-8 text-center text-sm text-white dark:text-white/70 bg-[#001840] h-15 gap-2 grid grid-rows-2">
        <ul class="flex flex-row gap-8 justify-center">
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/articles">ARTICLES</a></li>
            <li><a href="/contact">CONTACT US</a></li>
        </ul>
        <p> &copy; 2025 BLOGER. All rights reserved.</p>
    </footer>
    <script>
        const navLinks = document.querySelector(".nav-links");
        function onToggleMenu(e) {
            e.name = e.name === "menu" ? "close" : "menu";
            navLinks.classList.toggle("top-[6%]");
            if (navLinks.classList.contains('top-[6%]')) {
                navLinks.style.backgroundColor = 'black';
            } else {
                navLinks.style.backgroundColor = '#0000';
            }
            navLinks.style.display = 'flex';
            navLinks.style.justifyContent = 'center';
        }

        const userBtn = document.getElementById("userBtn");
        const dropdownMenu = document.getElementById("dropdownMenu");
        userBtn.addEventListener("click", () =>
            dropdownMenu.classList.toggle("hidden")
        );
        document.addEventListener("click", (e) => {
            if (
                !userBtn.contains(e.target) &&
                !dropdownMenu.contains(e.target)
            ) {
                dropdownMenu.classList.add("hidden");
            }
        });

        function showCommentForm(btn) {
            btn.style.display = "none";
            btn.nextElementSibling.classList.remove("hidden");
        }
        function hideCommentForm(btn) {
            btn.parentElement.classList.add("hidden");
            btn.parentElement.previousElementSibling.style.display =
                "block";
        }
        function toggleReplyForm(id) {
            let form = document.getElementById("reply-form-" + id);
            form.classList.toggle("hidden");
        }

        function showEditForm(btn) {
            btn.style.display = "none";
            btn.nextElementSibling.classList.remove("hidden");
        }
        function hideEditForm(btn) {
            btn.parentElement.classList.add("hidden");
        }
        function toggleEditForm(id) {
            let form = document.getElementById("edit-form-" + id);
            form.classList.toggle("hidden");
        }
    </script>
</body>

</html>
