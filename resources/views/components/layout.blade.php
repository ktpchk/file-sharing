<!DOCTYPE html>
<html lang="ru" class="h-full">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>File Sharing</title>
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/14de4b1c37.js" crossorigin="anonymous"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            deepPineGreen: {
              50: '#4f6e77',
              100: '#45646d',
              200: '#3b5a63',
              300: '#315059',
              400: '#27464f',
              500: '#1d3c45',
              600: '#13323b',
              700: '#092831',
              800: '#001e27',
              900: '#00141d',
            },
            orange: {
              50: '#ff924c',
              100: '#fa8842',
              200: '#f07e38',
              300: '#e6742e',
              400: '#dc6a24',
              500: '#d2601a',
              600: '#c85610',
              700: '#be4c06',
              800: '#b44200',
              900: '#aa3800',
            },
            lightPeach: {
              50: '#ffffff',
              100: '#ffffff',
              200: '#ffffff',
              300: '#fffff5',
              400: '#fffbeb',
              500: '#fff1e1',
              600: '#f5e7d7',
              700: '#ebddcd',
              800: '#e1d3c3',
              900: '#d7c9b9',
            },
          },
        },
      },
    }
  </script>
</head>

<body class="font-medium text-deepPineGreen-600 h-full">
  <!-- Wrapper -->
  <div class="flex flex-col min-h-full overflow-hidden">
    <nav class="bg-lightPeach-500 shadow z-10">
      <div class="container mx-auto p-4">
        <div class="flex justify-between">
          <!-- Logo -->
          <div class="">
            <a href="/"><img src="{{ asset('img/logo.svg') }}" class="h-12" alt="" /></a>
          </div>
          <!-- Navbar -->
          <div class="hidden lg:flex justify-between items-center space-x-12">
            <a href="/files/latest" class="hover:text-deepPineGreen-100 text-2xl">Недавнее</a>
            <a href="/terms" class="hover:text-deepPineGreen-100 text-2xl">Правила</a>
            <a href="/faq" class="hover:text-deepPineGreen-100 text-2xl">FAQ</a>
          </div>
          @auth
            <div class="flex justify-between items-center space-x-6">
              <a href="/files/manage" class="hover:text-deepPineGreen-100 text-lg"><i class="fa-solid fa-list"></i></i>
                Мои файлы</a>
              <form action="/logout" method="POST">
                @csrf
                <button class="font-medium hover:text-deepPineGreen-100 text-lg">
                  <i class="fa-solid fa-door-open"></i>
                  Выйти
                </button>
              </form>
            </div>
          @else
            <!-- Register/Login -->
            <div class="flex justify-between items-center space-x-6">
              <a href="/register" class="hover:text-deepPineGreen-100 text-lg"><i class="fa-solid fa-user-plus"></i>
                Зарегистрироваться</a>
              <a href="/login" class="hover:text-deepPineGreen-100 text-lg"><i
                  class="fa-solid fa-arrow-right-to-bracket"></i>
                Войти</a>
            </div>
          @endauth
          <!-- Hamburger -->
          <!-- Menu -->
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
  <script src="js/script.js"></script>
</body>

</html>
