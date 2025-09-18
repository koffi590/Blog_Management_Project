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
                                    href="{{ url('/articles') }}"
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
            </div>
        </header>
        <div class="w-full h-64 md:h-96 bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/ae/48/4a/ae484a15a84631934a735e96ad73147d.jpg');">
            <div class="h-full inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
                <div class="flex flex-col items-center gap-8">
                    <h1 class="text-4xl font-bold text-responsive-body text-white">WELCOME TO YOUR BLOG WEBSITE</h1>
                    <p class="text-white text-nowrap">Share your kwonledges about themes that interest you...</p>
                </div>
            </div>
        </div>
        <main class="flex flex-row justify-center align-items mt-6 w-full px-4 py-2">
            <div class="p-6 md:p-8 rounded-lg shadow-lg w-full max-w-lg">

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

            <div class="w-full sm:max-w-md mt-6 px-6 py-4">
                {{ $slot }}
            </div>

        </div>
        </main>

        <footer class="py-8 text-center text-sm text-white dark:text-white/70 bg-[#001840] h-15 gap-8">
            <ul class="flex flex-row gap-8 justify-center">
                <li><a href="/">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/articles">ARTICLES</a></li>
                <li><a href="/contact">CONTACT US</a></li>
            </ul
            <p>&copy; 2025 BLOGER. All rights reserved.</p>
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

