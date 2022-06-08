<!DOCTYPE html>
<html lang="ru" class="h-full">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>File Sharing</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}" />
  <script src="https://kit.fontawesome.com/14de4b1c37.js" crossorigin="anonymous"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-medium text-deepPineGreen-600 h-full">
  <!-- Wrapper -->
  <div class="flex flex-col min-h-full overflow-hidden">
    <nav class="bg-lightPeach-500 shadow z-10">
      <div class="container mx-auto p-4">
        <div class="flex">
          <!-- Logo -->
          <div class="mr-12 hidden md:block">
            <a href="/"><img src="{{ asset('img/logo.svg') }}" class="h-12" alt="" /></a>
          </div>
          <!-- Navbar -->
          <div class="hidden lg:flex justify-between items-center space-x-12">
            <a href="/files/latest" class="hover:text-deepPineGreen-100 text-2xl">Недавнее</a>
            <a href="/terms" class="hover:text-deepPineGreen-100 text-2xl">Правила</a>
            <a href="/faq" class="hover:text-deepPineGreen-100 text-2xl">FAQ</a>
          </div>

          <div class="flex justify-between items-center space-x-6 mr-auto lg:ml-auto lg:mr-0">
            @auth
              <a href="/files/manage" class="hover:text-deepPineGreen-100 text-lg"><i class="fa-solid fa-list"></i></i>
                Мои файлы</a>
              <form action="/logout" method="POST">
                @csrf
                <button class="font-medium hover:text-deepPineGreen-100 text-lg">
                  <i class="fa-solid fa-door-open"></i>
                  Выйти
                </button>
              </form>
            @else
              <a href="/register" class="hover:text-deepPineGreen-100 text-lg"><i class="fa-solid fa-user-plus"></i>
                Зарегистрироваться</a>
              <a href="/login" class="hover:text-deepPineGreen-100 text-lg"><i
                  class="fa-solid fa-arrow-right-to-bracket"></i>
                Войти</a>
            @endauth
          </div>
          <!-- Hamburger -->
          <button id="menu-btn" class="block hamburger lg:hidden focus:outline-none mt-2 self-center">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
          </button>

        </div>
        <!-- Menu -->
        <div class="lg:hidden">
          <div id="menu"
            class="absolute hidden flex-col items-center self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
            <a href="/files/latest">Недавнее</a>
            <a href="/terms">Правила</a>
            <a href="/faq">FAQ</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="flex-auto bg-lightPeach-400 flex">
      {{ $slot }}
    </main>
    <footer class="bg-lightPeach-500 shadow-inner z-10">
      <div class="container mx-auto">
        <!-- Copy -->
        <div class="text-center py-6 text-deepPineGreen-50">
          Copyright &copy; 2022, All Rights Reserved
        </div>
      </div>
    </footer>
  </div>
  <x-flash-message />
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/hamburger.js') }}"></script>
</body>

</html>
