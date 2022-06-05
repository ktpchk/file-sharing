<x-layout>
  <div class="container mx-auto">
    <a href="{{ url()->previous() }}" class="inline-block ml-4 mt-4 hover:text-deepPineGreen-100 text-2xl"><i
        class="fa-solid fa-arrow-left"></i> Назад
    </a>
    <div class="my-4 p-8 bg-white shadow-md rounded-md border-2 border-lightPeach-900">
      <div class="flex flex-col items-center justify-center text-center">
        <!-- Image -->
        <div class="mb-6 max-w-3xl">
          <img src="{{ asset('img/no-image.png') }}" class="rounded-md" alt=" " />
        </div>
        <!-- Information -->
        <ul class="flex flex-col mb-4">
          <li class="flex space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Имя файла:</div>
            <h3 class="text-2xl text-deepPineGreen-50 mb-2">
              {{ $file->name }}
            </h3>
          </li>
          <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Размер файла:</div>
            <div class="text-xl font-bold text-orange-900 mb-2">
              {{ $file->size }} Kb
            </div>
          </li>
          <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Дата загрузки:</div>
            <div class="text-xl font-bold text-orange-900 mb-2">
              {{ $file->created_at->toDateString() }}
            </div>
          </li>
        </ul>
        <!-- Comment -->
        <div class="self-stretch w-1/2 mx-auto mb-6 p-4 rounded-md border border-lightPeach-900">
          <h3 class="text-xl mb-2">Комментарий автора</h3>
          <p class="text-left">
            {{ $file->comment }}
          </p>
        </div>
        <!-- Download -->

        <div class="self-stretch w-1/3 mx-auto">
          <a href="" class="block p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600"><i
              class="fa-solid fa-file-arrow-down"></i> Скачать</a>
        </div>
      </div>
    </div>
  </div>
</x-layout>
