<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

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
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
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
                        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                    </div>
                   </div>
                    @endif
                </div>
            </div>
        </header>
        </header>
        <div class="h-screen w-screen overflow-hidden">
            <!-- Your banner content goes here -->
            <div class="flex items-center justify-center text-black bg-[url('data:image/jpeg;base64,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')] bg-cover bg-center h-screen">
                <h1 class="text-5xl font-bold">Your Full-Page Banner</h1>
            </div>
        </div>
        <section class="py-16 text-center text-white bg-cover bg-center ">

        </section>

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
