<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Newspaper CSS News Template">
    <title>Newspaper Website</title>
    <x-frontend.style></x-frontend.style>
</head>

<body class="text-gray-700 pt-9 sm:pt-10">
    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-50">
        <div id="topheader" class="">
            <x-frontend.header></x-frontend.head>
        </div>
        <nav class="bg-black">
            <x-frontend.navbar></x-frontend.navbar>
        </nav>
    </header>

    <!-- Mobile menu -->
    <div class="side-area fixed w-full h-full inset-0 z-50">
        <!-- bg open -->
        <div class="back-menu fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0">
            <div class="cursor-pointer text-white absolute right-64 p-2">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

        <!-- Mobile navbar -->
        <nav id="mobile-nav"
            class="side-menu flex flex-col right-0 w-64 fixed top-0 bg-white h-full overflow-auto z-40">
            <x-frontend.mobile-menu></x-frontend.mobile-menu>
        </nav>
    </div>
    <!-- End Mobile menu -->


    <!-- ========== MAIN ==========  -->
    <main id="content">
        {{ $slot }}
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-black text-gray-400">
        <x-frontend.footer></x-frontend.footer>
    </footer>

    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-10 border border-gray-100 text-gray-500 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <i class="fa-solid fa-arrow-up-9-1"></i>
    </a>

    <x-frontend.script></x-frontend.script>
</body>

</html>
