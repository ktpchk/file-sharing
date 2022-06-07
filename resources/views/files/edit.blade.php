<x-layout>
  <div class="container mx-auto flex-auto flex flex-col items-center justify-center">

    <div class=""><a href="/files/manage"
        class="inline-block ml-4 mt-4 hover:text-deepPineGreen-100 text-2xl"><i class="fa-solid fa-arrow-left"></i> Назад
      </a>
      <x-card class="mx-6 mt-4 mb-6 p-4">
        <header class="text-center">
          <h2 class="text-2xl font-bold uppercase mb-4">Редактировать файл</h2>
        </header>

        <div class="mb-6 max-w-3xl">
          @if ($file->imagePath)
            <img src="{{ asset('storage/' . $file->imagePath) }}"
              class="max-w-full p-6 border-2 border-deepPineGreen-400/10" alt="" />
          @endif
        </div>

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
              @if ($file->size <= 1024)
                {{ $file->size }} bytes
              @elseif($file->size <= 1024 * 1024)
                {{ round($file->size / 1024, 2) }} Kb
              @else
                {{ round($file->size / 1024 / 1024, 2) }} Mb
              @endif
            </div>
          </li>
          <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Дата загрузки:</div>
            <div class="text-xl font-bold text-orange-900 mb-2">
              {{ $file->created_at->toDateString() }}
            </div>
          </li>
        </ul>
        <form method="POST" action="/files/{{ $file->id }}">
          @csrf
          @method('PATCH')
          <div class="mb-6">
            <label for="comment" class="inline-block text-lg mb-2">Ваш Комментарий</label>
            <textarea id="comment" name="comment" class="w-full mx-auto p-2 rounded-md border-2 border-deepPineGreen-50" rows="7">{{ $file->comment }}</textarea>
            @error('comment')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6 flex justify-center">
            <button type="submit"
              class="p-2 w-2/3 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
              <i class="fa-solid fa-floppy-disk"></i> Сохранить
            </button>
          </div>
        </form>
      </x-card>
    </div>

  </div>
</x-layout>
