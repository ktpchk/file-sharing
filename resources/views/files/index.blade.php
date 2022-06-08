<x-layout>
  <div class="container mx-auto">
    <h2 class="text-5xl text-center m-4 py-6">
      Последние загруженные пользователями файлы
    </h2>
    <div class="mx-6">
      @include('partials._search')

      <x-card class="p-2 flex">
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Имя файла
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Размер
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center sm:flex">
          Дата загрузки
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Комментарий
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Скачать
        </div>
      </x-card>

      <div class="my-4 flex flex-col space-y-1">
        @unless(count($files) == 0)
          @foreach ($files as $file)
            <x-card class="p-4 flex">
              <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
                <div class="-mr-6 flex-auto flex flex-col items-center">
                  @if ($file->content->type ?? false == 'image')
                    <img src="{{ asset('storage/' . $file->content->path) }}" class="max-w-full max-h-20" alt="" />
                  @endif
                  <a href="/files/{{ $file->id }}"
                    class="block text-center hover:text-orange-600">{{ $file->name }}</a>
                </div>
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
                @if ($file->size <= 1024)
                  {{ $file->size }} bytes
                @elseif($file->size <= 1024 * 1024)
                  {{ round($file->size / 1024, 2) }} Kb
                @else
                  {{ round($file->size / 1024 / 1024, 2) }} Mb
                @endif
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center sm:flex">
                {{ $file->created_at->toDateString() }}
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
                {{ $file->description }}
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 text-center flex justify-center items-center">
                <!-- button -->
                <a href="/files/{{ $file->id }}/download"
                  class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
                  <i class="fa-solid fa-file-arrow-down"></i> Скачать
                </a>
              </div>
            </x-card>
          @endforeach
        @else
          <x-card class="p-4">
            @if ($searchValue)
              <div class="">Файлы по запросу "{{ $searchValue }}" не найдены.</div>
            @else
              <div class="">Файлы не найдены.</div>
            @endif
          </x-card>
        @endunless

      </div>
    </div>

  </div>

</x-layout>
