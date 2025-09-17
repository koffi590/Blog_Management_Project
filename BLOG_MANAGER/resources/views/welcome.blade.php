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
            <div class="flex justify-between items-center p-2.5 w-[85%] mx-auto">
                <a href="#">
                    <img class="w-12 h-12" src="https://images-platform.99static.com//ZhRjGjw-f9DnuFcS0MLa_rt-Xtg=/796x702:1333x1239/fit-in/500x500/projects-files/134/13414/1341412/f2fb5d50-afe3-4269-962d-3d4cc50b86a9.jpg" alt="logo">
                </a>
                    <div class="nav-links bg-white md:bg-transparent duration-500 md:static absolute md:min-h-fit min-h-[22vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-2">
                        <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                            <li>
                                <a
                                    href="{{ url('/') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ url('/') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    ABOUT
                                </a>
                            </li>
                            <li>
                                 <a
                                    href="{{ url('/') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    ARTICLES
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ url('/') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/80 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    CONTACT US
                                </a>
                            </li>
                        </ul>
                    </div>
                <div class="relative inline-block text-left h-[44px]">
                    @if (Auth::check())
                    <button id="userBtn" class="bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                        {{ auth()->user()->name }}
                    </button>
                    <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex gap-1 w-full text-left px-4 py-2 hover:bg-gray-200">
                                Déconnexion
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 my-auto ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                </svg>
                            </button>
                        </form>
                        <button  class="flex gap-1 w-full text-left px-4 py-2 hover:bg-gray-200">
                            <a href="{{ route('profile.edit') }}">Profil</a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 my-auto ml-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>

                        </button>
                    </div>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden fill-current:white text-white"></ion-icon>
                    @else
                   <div class="flex flex-row gap-8">
                     <div class="flex items-center gap-6">
                        <button class="bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                            <a class=" py-3 px-5" href="{{ route('login') }}">LOGIN</a>
                        </button>
                    </div>
                     <div class="flex items-center gap-6">
                        <button class="bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                            <a class=" py-3 px-5" href="{{ route('register') }}">REGISTER</a>
                        </button>
                        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden fill-current:white text-white"></ion-icon>
                    </div>
                   </div>
                    @endif
                </div>
            </div>
        </header>
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
                    <div class="flex text-white flex-col items-center gap-8">
                        <h1 class="text-4xl font-bold text-nowrap text-responsive-body">WELCOME TO YOUR BLOG WEBSITE</h1>
                        <p class="text-white">Share your kwonledges about themes that can interest you...</p>
                        <div> </div>
                        <div> </div>
                        <button class="flex justify-center w-60 bg-[#f5c400] text-white py-2 px-3 rounded-full hover:bg-[#ffdc5f] hover:text-black">
                            <a href="{{ route('articles.create') }}">Let's write an article</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-6">
            <div class="w-1/2">
                <form action="{{ route('dashboard') }}" method="GET" class="flex justify-center mt-6">
                    <input type="text" name="search" placeholder="Titre du post..." value="{{ request('search') }}" class="w-full p-3 pl-10 rounded-full bg-gray-200" autocomplete="off">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <section class="py-16 text-center text-white bg-cover bg-center ">
            <div class="grid">
                <div class="card"></div>
            </div>
        </section>

        
        <main class="mt-6"></main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{
            PHP_VERSION }})
        </footer>
        <script>
            const navLinks = document.querySelector(".nav-links");
            function onToggleMenu(e) {
                e.name = e.name === "menu" ? "close" : "menu";
                navLinks.classList.toggle("top-[6%]");
                navLinks.style.backgroundColor = 'black';
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
