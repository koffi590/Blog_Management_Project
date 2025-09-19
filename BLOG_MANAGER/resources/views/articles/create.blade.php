<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
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
        <!-- <div class="h-screen w-screen overflow-hidden">
            Your banner content goes here
            <div class="flex items-center justify-center text-black bg-[url('https://i.pinimg.com/736x/ae/48/4a/ae484a15a84631934a735e96ad73147d.jpg')] bg-cover bg-center h-screen">
                <div class="flex flex-col">
                    <h1 class="text-5xl font-bold text-nowrap text-responsive-body">WELCOME TO YOUR BLOG WEBSITE</h1>
                    <p>YOUR CAN EXPRESS</p>
                </div>
            </div>
        </div> -->
        <div class="w-full h-64 md:h-96 bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/ae/48/4a/ae484a15a84631934a735e96ad73147d.jpg');">
            <div class="h-full inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
                <div class="flex flex-col items-center gap-8">
                    <h1 class="text-4xl font-bold text-responsive-body text-white text-xl sm:text-2xl md:text-4xl lg:text-5xl font-bold">WELCOME TO YOUR BLOG WEBSITE</h1>
                    <p class="text-white text-responsive-body text-sm sm:text-base md:text-lg">Share your kwonledges about themes that interest you...</p>
                </div>
            </div>
        </div>
        <main class="flex flex-row justify-center align-items mt-6 w-full px-4 py-2">
            <div class="p-6 md:p-8 rounded-lg shadow-lg w-full max-w-lg" style="background: #001840;">
            <h2 class="text-2xl mb-6 text-center text-white">CREATE AN ARTICLE</h2>

            <!-- Affichage des erreurs -->
            @if($errors->any())
                <div class="mb-4 p-3 bg-red-200 text-red-800 rounded">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Message de succès -->
            @if(session('success'))
                <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-center p-2 place-content-center">
                <form action="{{ route('articles.store')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

               <!-- category -->
                <div class="w-80">
                    <label for="category" class="block font-medium mb-1 text-white">category</label>
                    <input type="text" name="category" id="category"
                        class="w-full border p-4 rounded"
                        style="background-color: white;"
                        placeholder="Type the category of your article please"
                        value="{{ old('category') }}" required>
                </div>

                <!-- Titre -->
                <div class="w-80">
                    <label for="title" class="block font-medium mb-1 text-white">Title</label>
                    <input type="text" name="title" id="title"
                        class="w-full border p-4 rounded"
                        style="background-color: white;"
                        placeholder="Type the title of your article please"
                        value="{{ old('title') }}" required>
                </div>

                <!-- URL de l'image -->
                <div class="w-80">
                    <label for="image" class="block font-medium mb-1 text-white form-control">Image URL</label>
                    <input type="url" name="image" id="image"
                        class="w-full border p-2 rounded"
                        style="background-color:  white;"
                        placeholder="Paste your article url here please"
                        value="{{ old('image') }} ">
                </div>

                <!-- Description -->
                <div class="w-80">
                    <label for="description" class="block font-medium mb-1 text-white">Description</label>
                    <textarea name="description" id="description" rows="5"
                            class="w-full border p-2 rounded"
                            placeholder="Explain a little bit please"
                            style="background-color: white;"
                            required>{{ old('description') }}</textarea>
                </div>


                <div class="flex justify-center gap-8">
                     <button class="bg-[#f5c400] text-white py-2 px-3 rounded hover:bg-[#ffdc5f] hover:text-black px-4 py-2 font-bold">
                        Post
                    </button>
                    <button class="bg-[#f5c400] text-white py-2 px-3 rounded hover:bg-[#ffdc5f] hover:text-black px-4 py-2 font-bold">
                        <a href="/">back</a>
                    </button>
                </div>

            </form>
            </div>

        </div>
        </main>

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
                if(navLinks.classList.contains('top-[6%]')) {
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
        </script>
    </body>
</html>
