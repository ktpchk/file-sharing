<x-layout>
  <div class="container mx-auto">
    <h2 class="text-5xl text-center m-4 py-6">
      Последние загруженные пользователями файлы
    </h2>
    @include('partials._search')

    <x-card class="p-2 flex">
      <div class="w-1/4 md:w-1/5 flex items-center justify-center">
        Имя файла
      </div>
      <div class="w-1/4 md:w-1/5 flex items-center justify-center">
        Размер
      </div>
      <div class="w-1/4 md:w-1/5 flex items-center justify-center">
        Дата загрузки
      </div>
      <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
        Комментарий
      </div>
      <div class="w-1/4 md:w-1/5 flex items-center justify-center">
        Скачать
      </div>
    </x-card>

    <div class="my-4 flex flex-col space-y-1">

      <x-card class="p-4 flex">
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          <div class="-mr-6 flex-auto flex flex-col items-center">
            <img src="{{ asset('img/no-image.png') }}" class="max-w-full" alt=" " />
            <a href="/latest/1" class="block text-center hover:text-orange-600">no-img.png</a>
          </div>
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          32.0 Kb
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          2022-06-02
        </div>
        <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
          quia facilis, doloremque, repellat consectetur excepturi sit
          laborum beatae sed ullam quasi non explicabo aliquam aut
          veniam velit vitae suscipit laboriosam?
        </div>
        <div class="w-1/4 md:w-1/5 text-center flex justify-center items-center">
          <!-- button -->
          <a href="#" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </x-card>

      <x-card class="p-4 flex">
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          <div class="-mr-6 flex-auto flex flex-col items-center">
            <img src="{{ asset('img/no-image.png') }}" class="max-w-full" alt=" " />
            <a href="/latest/1" class="block text-center hover:text-orange-600">no-img.png</a>
          </div>
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          32.0 Kb
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          2022-06-02
        </div>
        <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
          quia facilis, doloremque, repellat consectetur excepturi sit
          laborum beatae sed ullam quasi non explicabo aliquam aut
          veniam velit vitae suscipit laboriosam?
        </div>
        <div class="w-1/4 md:w-1/5 text-center flex justify-center items-center">
          <!-- button -->
          <a href="#" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </x-card>

      <x-card class="p-4 flex">
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          <div class="-mr-6 flex-auto flex flex-col items-center">
            <img src="{{ asset('img/no-image.png') }}" class="max-w-full" alt=" " />
            <a href="/latest/1" class="block text-center hover:text-orange-600">no-img.png</a>
          </div>
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          32.0 Kb
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          2022-06-02
        </div>
        <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
          quia facilis, doloremque, repellat consectetur excepturi sit
          laborum beatae sed ullam quasi non explicabo aliquam aut
          veniam velit vitae suscipit laboriosam?
        </div>
        <div class="w-1/4 md:w-1/5 text-center flex justify-center items-center">
          <!-- button -->
          <a href="#" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </x-card>

      <x-card class="p-4 flex">
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          <div class="-mr-6 flex-auto flex flex-col items-center">
            <img src="{{ asset('img/no-image.png') }}" class="max-w-full" alt=" " />
            <a href="/latest/1" class="block text-center hover:text-orange-600">no-img.png</a>
          </div>
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          32.0 Kb
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          2022-06-02
        </div>
        <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
          quia facilis, doloremque, repellat consectetur excepturi sit
          laborum beatae sed ullam quasi non explicabo aliquam aut
          veniam velit vitae suscipit laboriosam?
        </div>
        <div class="w-1/4 md:w-1/5 text-center flex justify-center items-center">
          <!-- button -->
          <a href="#" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </x-card>

      <x-card class="p-4 flex">
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          <div class="-mr-6 flex-auto flex flex-col items-center">
            <img src="{{ asset('img/no-image.png') }}" class="max-w-full" alt=" " />
            <a href="/latest/1" class="block text-center hover:text-orange-600">no-img.png</a>
          </div>
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          32.0 Kb
        </div>
        <div class="w-1/4 md:w-1/5 flex items-center justify-center">
          2022-06-02
        </div>
        <div class="w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
          quia facilis, doloremque, repellat consectetur excepturi sit
          laborum beatae sed ullam quasi non explicabo aliquam aut
          veniam velit vitae suscipit laboriosam?
        </div>
        <div class="w-1/4 md:w-1/5 text-center flex justify-center items-center">
          <!-- button -->
          <a href="#" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </x-card>
    </div>
  </div>

</x-layout>
